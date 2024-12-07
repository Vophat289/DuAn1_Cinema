<?php
include __DIR__ . '/./inc/header.php';
?>

<main class="main">
        <div class="container-fluid">
            <div class="row row--grid">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Dashboard</h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- stats -->
                <div class="col-12 col-sm-6 col-lg-6">
    <div class="stats">
        <span>Tổng số phim đã bán</span>
        <p><?php echo isset($data['ticketSales'][0]['total_paid_tickets']) ? $data['ticketSales'][0]['total_paid_tickets'] : 0; ?></p>
        <i class="icon ion-ios-stats"></i>
    </div>
</div>

<div class="col-12 col-sm-6 col-lg-6">
    <div class="stats">
        <span>Tổng số bộ phim</span>
        <p><?php echo isset($data['totalMovies']) ? $data['totalMovies'] : 0; ?></p>
        <i class="icon ion-ios-film"></i>
    </div>
</div>

                <!-- dashbox -->
                <div class="col-12 col-xl-6">
                    <div class="dashbox">
                        <div class="dashbox__title">
                            <h3><i class="icon ion-ios-trophy"></i> Doanh thu theo 12 tháng gần nhất</h3>
                        </div>

                        <div class="dashbox__table-wrap">
                            <div class="card">
                                <div class="card-header">Biểu đồ doanh thu theo tháng</div>
                                <div class="card-body">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                            <script>
    // Dữ liệu từ Controller
    var salesData = <?php echo json_encode($data['monthlySales']); ?>;

    // Chuẩn bị dữ liệu cho biểu đồ
    var months = salesData.map(function(data) {
        return data.month_year;
    });

    var totalSales = salesData.map(function(data) {
        return data.total_sales_amount;
    });

    // Vẽ biểu đồ
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'Doanh thu (VNĐ)',
                data: totalSales,
                backgroundColor: '#f9ab00',
                borderColor: 'none',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value, index, values) {
                            return value.toLocaleString(); // Format số tiền hiển thị
                        },
                        color: 'white' // Màu chữ là trắng
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.45)', // Màu gạch ngang là trắng
                        borderColor: 'rgba(255, 255, 255, 0.45)' // Màu viền gạch ngang là trắng
                    }
                },
                x: {
                    ticks: {
                        color: 'white' // Màu chữ là trắng
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.45)', // Màu gạch ngang là trắng
                        borderColor: 'rgba(255, 255, 255, 0.45)' // Màu viền gạch ngang là trắng
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white' // Màu chữ của chú thích là trắng
                    }
                }
            }
        }
    });
</script>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="dashbox">
                        <div class="dashbox__title">
                            <h3><i class="icon ion-ios-trophy"></i> Top Phim</h3>
                        </div>
                        <div class="dashbox__table-wrap">
                            <table class="main__table main__table--dash">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên phim</th>
                                        <th>Doanh thu (VNĐ)</th>
                                        <th>Số vé bán</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php
    // Giả sử $data['topMovies'] là mảng chứa thông tin phim
    if (!empty($data['topMovies'])) {
        foreach ($data['topMovies'] as $index => $movie) {
    ?>
            <tr>
                <td class="">
                    <a href="#" class="main__table-text">

                        <?php echo $index + 1; // Xếp hạng phim dựa trên vị trí trong mảng ?>
                    </a>
                </td>
                <td class="">
                    <a class="main__table-text" href="#"><?php echo htmlspecialchars($movie['title']); ?></a>
                </td>
                <td class="">
                    <div class="main__table-text">
                        <?php echo number_format($movie['total_sales_amount'], 0, ',', '.'); ?> VNĐ
                    </div>
                </td>
                <td class="">
                    <div class="main__table-text">
                        <?php echo $movie['total_tickets_sold']; ?>
                    </div>
                </td>
            </tr>
    <?php
        }
    } else {
        // Nếu không có phim nào, có thể hiển thị thông báo
        echo '<tr><td colspan="4">Không có dữ liệu phim nào.</td></tr>';
    }
    ?>
</tbody>

                            </table>
                        </div>

                    </div>
                </div>
                <!-- end dashbox -->

                <!-- dashbox -->
          
                <!-- end dashbox -->

                <!-- dashbox -->
              
            </div>
        </div>
    </main>