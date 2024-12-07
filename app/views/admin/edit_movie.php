<?php
include __DIR__ . '/./inc/header.php';
?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
            <form action="<?php echo route('admin/editMovie/' . $data['movie']['id_phim']); ?>" method="POST" class="form" enctype="multipart/form-data">
    <div class="row row--form">
        <div class="col-12 col-md-5 form__cover">
            <div class="row row--form">
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="form__img">
                        <label for="hinhanh">Upload cover (270 x 400)</label>
                        <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                        <img id="form__img" src="/imgs/<?= htmlspecialchars($data['movie']['hinhanh']); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7 form__content">
            <div class="row row--form">
                <div class="col-12">
                    <input type="text" name="atenphim" class="form__input" placeholder="Title" value="<?= htmlspecialchars($data['movie']['atenphim']); ?>" required>
                </div>

                <div class="col-12">
                    <textarea id="noidung" name="noidung" class="form__textarea" placeholder="Description" required><?= htmlspecialchars($data['movie']['noidung']); ?></textarea>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <input type="text" name="nsx" class="form__input" placeholder="Release year" value="<?= htmlspecialchars($data['movie']['nsx']); ?>" required>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <input type="text" name="thoiluong" class="form__input" placeholder="Running time in minutes" value="<?= htmlspecialchars($data['movie']['thoiluong']); ?>" required>
                </div>

                <div class="col-12 col-md-7 form__content">
                    <div class="row row--form">
                        <div class="col-12 col-lg-4">
                            <input type="text" name="daodien" class="form__input" id="daodien" placeholder="Director" value="<?= htmlspecialchars($data['movie']['daodien']); ?>" required>
                        </div>
                        <div class="col-12 col-lg-4">
                            <input type="text" name="dienvien" class="form__input" id="dienvien" placeholder="Actors" value="<?= htmlspecialchars($data['movie']['dienvien']); ?>" required>
                        </div>

                        <div class="col-12 col-lg-4">
                            <input type="number" name="giave" class="form__input" placeholder="Ticket price" value="<?= htmlspecialchars($data['movie']['giave']); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <input type="date" name="ngaykhoichieu" class="form__input" placeholder="Release date" value="<?= htmlspecialchars($data['movie']['ngaykhoichieu']); ?>" required>
                        </div>
                        <div class="col-12">
                            <input type="text" name="trailer" class="form__input" placeholder="Trailer link" value="<?= htmlspecialchars($data['movie']['trailer']); ?>" required>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                <select name="quocgia" class="js-example-basic-multiple" id="country" required>
    <option value="Viet Nam" <?= $data['movie']['quocgia'] === 'Việt Nam'?>>Việt Nam</option>
    <option value="USA" <?= $data['movie']['quocgia'] === 'USA'?>>USA</option>
    <option value="Nhat Ban" <?= $data['movie']['quocgia'] === 'Nhật Bản' ?>>Nhật Bản</option>
    <option value="Nhat Ban" <?= $data['movie']['quocgia'] === 'Thái Lan' ?>>Thái Lan</option>
    <option value="Nhat Ban" <?= $data['movie']['quocgia'] === 'Trung Quốc' ?>>Trung Quộc</option>
    <!-- Các option khác ở đây -->
</select>

                </div>

                <div class="col-12 col-lg-6">
                    <select name="theloai[]" class="js-example-basic-multiple" id="genre" multiple="multiple" required>
                        <option value="Action">Hành Động
                        <?= $data['movie']['theloai'] === 'Hành Động' ?></option>
                        <option value="Horror">Kinh Dị
                        <?= $data['movie']['theloai'] === 'Kinh Dị' ?></option>
                        <option value="Horror">Tình Cảm
                        <?= $data['movie']['theloai'] === 'Tình Cảm' ?></option>
                        <option value="Horror">Hài Hước
                        <?= $data['movie']['theloai'] === 'Hài Hước' ?></option>
                        <!-- Các option khác ở đây -->
                    </select>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row row--form">
                <div class="col-12">
                    <button type="submit" class="form__btn">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>



            </div>
            <!-- end form -->
        </div>
    </div>
</main>