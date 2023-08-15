<?php
    if (($open = fopen("vemaybay4.csv", "r")) !== FALSE){
        while (($data = fgetcsv($open, 1000, ",")) !==FALSE){
            $array[] = $data;
        }
        
        fclose($open);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="crawl.css">
    <title>Document</title>
</head>
<body>
    <div class="container1">
        <div class="title">
            <h3>KHÁM PHÁ CÁC CHUYẾN BAY PHỔ BIẾN NHẤT CỦA CHÚNG TÔI</h3>
        </div>
        <div class="choose">
            <div class="di">
                <p>Từ</p>
                <span class="icon"><i class="fa-solid fa-plane-departure"></i></span>
                <input type="text" placeholder="Nhập điểm đi">
            </div>
            <div class="den">
                <p>Đến</p>
                <span class="icon"><i class="fa-solid fa-plane-arrival"></i></i></span>
                <input type="text" placeholder="Nhập điểm đến">
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($array as $sub){
                    echo '<div class="card" style="display: flex; width: 24rem; margin-right: 20px; margin-top:10px; box-shadow: 0 0 10px 0 grey;">
                        <img src="'  . $sub[0] . '" class="card-img-top text-center" style="width: 100px; margin: 10px auto;" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-family:Arial;">' . $sub[1] . '</h5>
                            <div class="diadiem" style="display: flex; ">
                                <h5 class="card-title text-primary" style="font-family:Arial;margin-right: 20px;">' . $sub[2] . '</h5>
                                <p style="font-family:Arial;margin-right: 20px;">Đến</p>
                                <h5 class="card-title text-primary" style="font-family:Arial;margin-right: 20px;">' . $sub[3] . '</h5>
                            </div>
                            <div class="giogiac" style="display: flex; ">
                                <p class="card-text" style="margin-right: 20px;"><i class="fa-solid fa-clock text-primary" style="margin-right: 5px;"></i>' . $sub[4] . ' - ' . $sub[5] . '</p>
                                <p class="card-text" style="margin-right: 20px;"><i class="fa-solid fa-hourglass-half text-primary" style="margin-right: 5px;"></i>' . $sub[9] . '</p>
                            </div>
                            <h5 class="card-title text-primary" style="font-family:Arial;margin-right: 20px; margin-top:10px;">' . $sub[10] . '</h5>
                            <div class="hangbay" style="display: flex; ">
                                <img src="'  . $sub[6] . '" class="card-img-top" style="width: 20px; margin-right: 20px;" alt="">
                                <h5 class="card-title text-primary" style="font-family:Arial;margin-right: 20px; margin-top:10px;">' . $sub[7] . '</h5>
                            </div>
                            <p class="card-text text-primary"><i class="fa-solid fa-hand-holding-dollar text-danger"></i> ' . $sub[8] . '</p>
                            <a href="' . $sub[12] . '" ><i class="fa-solid fa-ticket" style="margin-right: 5px;"></i>Chi tiết vé</a>
                            <a href="' . $sub[11] . '" ><i class="fa-solid fa-plane-circle-check" style="margin-right: 5px;"></i></i>Chi tiết chuyến bay</a>
                            <a href="#" class="btn btn-primary Book_now"style="margin-top: 20px;">Đặt vé ngay</a>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>2
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>