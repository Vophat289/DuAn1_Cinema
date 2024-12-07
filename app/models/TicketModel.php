<?php
class TicketModel extends Database
{
    public function getMonthlySales()
    {
        $sql = "
            SELECT months.month_year,
                   IFNULL(stats.total_paid_tickets, 0) AS total_paid_tickets,
                   IFNULL(stats.total_sales_amount, 0) AS total_sales_amount
            FROM (
                SELECT DATE_FORMAT(ADDDATE(CURDATE(), INTERVAL -months_back.month MONTH), '%Y-%m') AS month_year
                FROM (
                    SELECT 0 AS month
                    UNION ALL SELECT 1
                    UNION ALL SELECT 2
                    UNION ALL SELECT 3
                    UNION ALL SELECT 4
                    UNION ALL SELECT 5
                    UNION ALL SELECT 6
                    UNION ALL SELECT 7
                    UNION ALL SELECT 8
                    UNION ALL SELECT 9
                    UNION ALL SELECT 10
                    UNION ALL SELECT 11
                ) AS months_back
            ) AS months
            LEFT JOIN (
                SELECT DATE_FORMAT(purchase.purchase_date, '%Y-%m') AS month_year,
                       COUNT(purchase.id) AS total_paid_tickets,
                       SUM(purchase.ticket_price * purchase.seat_count) AS total_sales_amount
                FROM ticket_purchase_history purchase
                WHERE purchase.purchase_date >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
                GROUP BY DATE_FORMAT(purchase.purchase_date, '%Y-%m')
            ) AS stats ON months.month_year = stats.month_year
            ORDER BY months.month_year ASC
        ";
    
        $result = $this->select($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
    public function getDailySales()
    {
        $sql = "
            SELECT DATE(purchase.purchase_date) AS date,
                   COUNT(purchase.id) AS total_paid_tickets,
                   SUM(purchase.ticket_price * purchase.seat_count) AS total_sales_amount
            FROM ticket_purchase_history purchase
            
        ";
        $result = $this->select($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    

    public function getTopMovies()
    {
        $sql = "
            SELECT phims.atenphim AS title,
                   SUM(ves.ticket_price * ves.seat_count) AS total_sales_amount,
                   SUM(ves.seat_count) AS total_tickets_sold
            FROM ticket_purchase_history ves
            JOIN tbphim phims ON ves.movie_id = phims.id_phim
            GROUP BY phims.atenphim
            ORDER BY total_sales_amount DESC
            LIMIT 6
        ";
        $result = $this->select($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
}
