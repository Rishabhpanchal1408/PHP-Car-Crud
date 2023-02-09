<?php require '../Controller/connection.php' ?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
}
?>
<?php require "header.php" ?>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <section class="card card-dark mt-4">
                <div class="card-header">
                    <h4 class="card-title">Car Gallery</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 ">
                            <a href="https://images.pexels.com/photos/100650/pexels-photo-100650.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/100650/pexels-photo-100650.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="white sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/136872/pexels-photo-136872.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 2 - white" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/136872/pexels-photo-136872.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="white sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 3 - white" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="wihte sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/100656/pexels-photo-100656.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 4 - white" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/100656/pexels-photo-100656.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="white sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/93632/pexels-photo-93632.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/93632/pexels-photo-93632.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="black sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/93652/pexels-photo-93652.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 6 - black" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/93652/pexels-photo-93652.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="black sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/14114778/pexels-photo-14114778.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 7 - black" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/14114778/pexels-photo-14114778.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="black sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/235298/pexels-photo-235298.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/235298/pexels-photo-235298.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="black sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/3422964/pexels-photo-3422964.jpeg?auto=compress&cs=tinysrgb&w=600" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/3422964/pexels-photo-3422964.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid mb-2" alt="red sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/10490000/pexels-photo-10490000.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" data-toggle="lightbox" data-title="sample 10 - red" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/10490000/pexels-photo-10490000.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid mb-2" alt="red sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/8561771/pexels-photo-8561771.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" data-toggle="lightbox" data-title="sample 11 - red" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/8561771/pexels-photo-8561771.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid mb-2" alt="red sample" />
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="https://images.pexels.com/photos/13911166/pexels-photo-13911166.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" data-toggle="lightbox" data-title="sample 12 - red" data-gallery="gallery">
                                <img src="https://images.pexels.com/photos/13911166/pexels-photo-13911166.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="img-fluid mb-2" alt="red sample" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php require "footer.php" ?>