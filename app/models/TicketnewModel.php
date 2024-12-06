<?php
class TicketnewModel extends Database
{


    public function createTicketPurchase($movieId, $ticketType,$ticketPrice , $showTime, $seatCount) {
        // Kết nối cơ sở dữ liệu và lưu thông tin vé
        $stmt = $this->link->prepare("INSERT INTO ticket_purchase_history (movie_id,user_id,  ticket_type,ticket_price, show_time, seat_count) VALUES (?,?, ?,?, ?, ?)");
        $stmt->bind_param("isssss", $movieId,$_SESSION['user_id'], $ticketType, $ticketPrice, $showTime, $seatCount);
        return $stmt->execute();
    }
}
