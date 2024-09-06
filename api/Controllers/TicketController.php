<?php

include_once '../Models/Ticket.php';

class TicketController {
    private $ticket;

    public function __construct() {
        $this->ticket = new Ticket();
    }

    public function processRequest($method, $uri) {
        $input = json_decode(file_get_contents('php://input'), true);

        switch ($method) {
            case 'GET':
                if (isset($uri[3])) {
                    $this->getTicketById($uri[3]);
                } else {
                    $this->getAllTickets();
                }
                break;

            case 'POST':
                $this->createTicket($input['subject'], $input['description'], $input['user_id']);
                break;

            case 'PUT':
                if (isset($uri[3])) {
                    $this->updateTicketStatus($uri[3], $input['status']);
                } else {
                    sendJsonResponse(['error' => 'Ticket ID not provided'], 400);
                }
                break;

            default:
                sendJsonResponse(['error' => 'Method not allowed'], 405);
                break;
        }
    }

    private function getAllTickets() {
        $tickets = $this->ticket->getAllTickets();
        if (!$tickets) {
            sendJsonResponse(['message' => 'No tickets found'], 404);
        } else {
            sendJsonResponse($tickets);
        }
    }

    private function getTicketById($id) {
        $ticket = $this->ticket->getTicketById($id);
        if (!$ticket) {
            sendJsonResponse(['message' => 'Ticket not found'], 404);
        } else {
            sendJsonResponse($ticket);
        }
    }

    private function createTicket($subject, $description, $userId) {
        if ($this->ticket->createTicket($subject, $description, $userId)) {
            sendJsonResponse(['message' => 'Ticket created successfully'], 201);
        } else {
            sendJsonResponse(['message' => 'Failed to create ticket'], 500);
        }
    }

    private function updateTicketStatus($id, $status) {
        if ($this->ticket->updateTicketStatus($id, $status)) {
            sendJsonResponse(['message' => 'Ticket status updated successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to update ticket status'], 500);
        }
    }
}

?>
