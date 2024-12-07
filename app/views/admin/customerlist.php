<?php
include __DIR__ . '/./inc/header.php';
?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Customers list</h2>

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
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Avatar</th>
            <th>Trạng thái</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['customer'] as $user): ?>
            <tr style="background-color: #222028;">
                <td>
                    <div class="main__table-text"><?= $user['id_user']; ?></div>
                </td>
                <td>
                    <div class="main__table-text"><?= htmlspecialchars($user['username']); ?></div>
                </td>
                <td>
                    <div class="main__table-text"><?= htmlspecialchars($user['email']); ?></div>
                </td>
                <td>
                    <div class="main__table-text"><?= htmlspecialchars($user['sdt']); ?></div>
                </td>
                
                <td>
                    <div class="main__table-text"><?= htmlspecialchars($user['role'] == 0 ? 'Người dùng' : ($user['role'] == 1 ? 'Quản trị viên' : 'Khách')); ?></div>
                </td>
                
                <td>
                    <div class="main__table-text">
                        <?php if (!empty($user['avatar'])): ?>
                            <img  src="<?= asset_('imgs/' . '64ae0b4de9e4e.jpg'); ?>" alt="User Avatar" style="max-width: 40px; border-radius: 100%; ">
                        <?php else: ?>
                            <span>No Avatar</span>
                        <?php endif; ?>
                    </div>
                </td>
                <td>
                    <?php if ($user['is_blocked']): ?>
                        <span style="color: red;">Bị khóa</span>
                    <?php else: ?>
                        <span style="color: green;">Hoạt động</span>
                    <?php endif; ?>
                </td>
                <td>
    <div class="main__table-btns">
         
        <form action="<?php echo route('admin/blockUser/' . $user['id_user']); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Bạn có chắc chắn muốn chặn người dùng này?');">
            <input type="hidden" name="_method" value="POST">
            <button type="submit" class="main__table-btn main__table-btn--block">
                <i class="icon ion-ios-lock"></i> <!-- Block icon -->
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