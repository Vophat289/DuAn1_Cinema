<?php
include __DIR__ . '/./inc/header.php';
?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add new item</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
            <form action="" method="POST" class="form" enctype="multipart/form-data">
    <div class="row row--form">
        <div class="col-12 col-md-5 form__cover">
            <div class="row row--form">
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="form__img">
                        <label for="hinhanh">Upload cover (270 x 400)</label>
                        <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                        <img id="form__img" src="#" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7 form__content">
            <div class="row row--form">
                <div class="col-12">
                    <input type="text" name="atenphim" class="form__input" placeholder="Title" required>
                </div>

                <div class="col-12">
                    <textarea id="noidung" name="noidung" class="form__textarea" placeholder="Description" required></textarea>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <input type="text" name="nsx" class="form__input" placeholder="Release year" required>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <input type="text" name="thoiluong" class="form__input" placeholder="Running time in minutes" required>
                </div>

                <div class="col-12 col-md-7 form__content">
                    <div class="row row--form">
                        <div class="col-12 col-lg-4">
                            <input type="text" name="daodien" class="form__input" id="daodien" placeholder="Director" required>
                        </div>
                        <div class="col-12 col-lg-4">
                            <input type="text" name="dienvien" class="form__input" id="dienvien" placeholder="Actors" required>
                        </div>

                        <div class="col-12 col-lg-4">
                            <input type="number" name="giave" class="form__input" placeholder="Ticket price" required>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <input type="date" name="ngaykhoichieu" class="form__input" placeholder="Release date" required>
                        </div>
                        <div class="col-12">
                            <input type="text" name="trailer" class="form__input" placeholder="Trailer link" required>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <select name="quocgia[]" class="js-example-basic-multiple" id="country" multiple="multiple" required>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="USA">USA</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <!-- Các option khác ở đây -->
                    </select>
                </div>

                <div class="col-12 col-lg-6">
                    <select name="theloai[]" class="js-example-basic-multiple" id="genre" multiple="multiple" required>
                        <option value="Action">Action</option>
                        <!-- Các option khác ở đây -->
                    </select>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row row--form">
                <div class="col-12">
                    <button type="submit" class="form__btn">Publish</button>
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