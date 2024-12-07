<?php
include __DIR__ . '/./inc/header.php';
?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Movies list</h2>

                    <span class="main__title-stat">9,071 Total</span>

                    <div class="main__title-wrap">
                        <!-- filter sort -->
                        <div class="filter" id="filter__sort">
                            <span class="filter__item-label">Sort by:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="Date created">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                aria-labelledby="filter-sort">
                                <li>Date created</li>
                                <li>Rating</li>
                            </ul>
                        </div>
                        <!-- end filter sort -->

                        <!-- search -->
                        <form action="#" class="main__title-form">
                            <input type="text" placeholder="Key word..">
                            <button type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                        </form>
                        <!-- end search -->
                    </div>
                </div>
            </div>
            <!-- end main title -->

            <!-- reviews -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Release Year</th>
                                <th>Genre</th>
                                <th>Country</th>
                                <th>Director</th>
                                <th>Actor</th>
                                <th>Running Time</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['movies'] as $movie): ?>
                                <tr style="background-color: #222028;">
                                    <td>
                                        <div class="main__table-text"><?= $movie['id_phim']; ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><a
                                                href="#"><?= htmlspecialchars($movie['atenphim']); ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">
                                            <img src="<?= asset_('imgs/' . $movie['hinhanh']); ?>" alt="Movie Image"
                                                style="max-width: 100px;">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['nsx']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['theloai']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['quocgia']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['daodien']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['dienvien']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['thoiluong']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?= htmlspecialchars($movie['created_at']); ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-btns">
                                            <a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
                                                <i class="icon ion-ios-eye"></i>
                                            </a>
                                            <a href="<?php echo route('admin/editMovie/' . $movie['id_phim']); ?>"
                                                class="main__table-btn main__table-btn--edit">
                                                <i class="icon ion-ios-create"></i> <!-- Edit icon -->
                                            </a>
                                            <form action="<?php echo route('admin/moviedestroy/' . $movie['id_phim']); ?>"
                                                method="POST" style="display: inline;"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa phim này?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="main__table-btn main__table-btn--delete">
                                                    <i class="icon ion-ios-trash"></i> <!-- Delete icon -->
                                                </button>
                                            </form>


                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- end reviews -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator-wrap">
                    <span>10 from 9 071</span>

                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end paginator -->
        </div>
    </div>
</main>