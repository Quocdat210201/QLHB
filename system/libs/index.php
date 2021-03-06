<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .slider {
            max-width: 1000px;
            position: relative;
        }

        .slider-next,
        .slider-prev {
            position: absolute;
            top: 48%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border-radius: 100rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #999;
            background-color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
        }

        .slider-next {
            right: 105px;
        }

        .slider-prev {
            left: 6px;
        }

        .slider-dots {
            position: absolute;
            left: 45%;
            transform: translateX(-50%);
            bottom: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            z-index: 10;
        }

        .slider-dots li {
            margin: 0 10px;
            width: 15px;
            height: 15px;
            border-radius: 100rem;
            background-color: #999;
            cursor: pointer;
            transition: background-color 0.25s linear;
        }

        .slider-dots li.active {
            background-color: white;
        }

        .slider-wrapper {
            width: 90%;
            height: 430px;
            overflow: hidden;
            position: relative;
        }

        .slider-main {
            display: flex;
            position: relative;
            transition: transform 0.25s linear;
            height: 84%;
        }

        .slider-item {
            height: 100%;
            width: 100%;
            flex: 1 0 100%;
            user-select: none;
        }

        .slider-item img {
            width: 100%;
            height: 118%;
            object-fit: cover;
            border-radius: 10px;
        }

        .navbar-img {
            margin-bottom: 11px;
        }

        .navbar-img img {
            width: 116%;
            border-radius: 6px;
        }

        .box-new {
            max-width: 1323px;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .box-new-desc {
            margin-bottom: 30px;
            color: #383535;
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 2.5rem;
            width: 300px;
        }

        .box-new-desc:hover {
            color: #b33f3f;
            cursor: pointer;
        }

        .box-new-item {
            border-bottom: 1px solid #ccc;
            margin-top: 16px;
        }

        .box-new-item-wrap {
            display: flex;
        }

        .box-new-item-body {
            margin-left: 6px;
        }
    </style>
</head>

<body>
    <div class="homepage">
        <div class="grid" style="width: 1333px; margin: auto; display: flex; margin-top:25px;">
            <div class="slider" style="width:80%;">
                <i class="fa fa-angle-left slider-prev" style="text-align: center;display: flex; align-items: center;"></i>
                <ul class="slider-dots">
                    <li class="slider-dot-item active" data-index="0"></li>
                    <li class="slider-dot-item" data-index="1"></li>
                    <li class="slider-dot-item" data-index="2"></li>
                    <li class="slider-dot-item" data-index="3"></li>
                    <li class="slider-dot-item" data-index="4"></li>
                </ul>
                <div class="slider-wrapper">
                    <div class="slider-main">
                        <div class="slider-item">
                            <img src="./assets/img/img1.png" alt="" />
                        </div>
                        <div class="slider-item">
                            <img src="./assets/img/img2.png" alt="" />
                        </div>
                        <div class="slider-item">
                            <img src="./assets/img/img3.jpg" alt="" />
                        </div>
                        <div class="slider-item">
                            <img src="./assets/img/img4.jpg" alt="" />
                        </div>
                        <div class="slider-item">
                            <img src="./assets/img/img5.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <i class="fa fa-angle-right slider-next" style="text-align: center;display: flex; align-items: center;"></i>
            </div>
            <div class="navbar" style="width:20%; display: flex; flex-direction: column; height: 10%;">
                <div class="navbar-img">
                    <img src="./assets/img/img6.jpg" alt="">
                </div>
                <div class="navbar-img">
                    <img src="./assets/img/img8.jpg" alt="">
                </div>
                <div class="navbar-img">
                    <img src="./assets/img/img9.jpg" alt="">
                </div>
                <!--<div class="navbar-img">
                <img src="./assets/img/img10.jpg" alt="">
            </div> -->
            </div>
        </div>
        <div class="box-new">
            <h2 class="box-new-desc">Ch??nh s??ch h???c b???ng</h2>
            <div class="box-new-item">
                <div class="box-new-item-wrap">
                    <img src="./assets/img/logo-star.jpg" alt="" style="width: 75px;margin: 0 22px 0 0;height: 75px;">
                    <div class="box-new-item-content">
                        <h4 style="font-size: 1.3rem">H???c b???ng cho Th?? sinh tr??ng tuy???n v??o ho??c ca??c chuy??n ng??nh thu???c ng??nh Ki???n tr??c, X??y d???ng, M??i tr?????ng & C??ng ngh??? Sinh h???c n??m 2022</h4>
                        <p style="opacity: 0.6">10/02/2022</p>
                    </div>
                </div>
                <div class="box-new-item-body">
                    <p class="box-new-item-body-content">
                    Tr?????ng ?????i h???c S?? ph???m K??? thu???t ban h??nh m???c gi???m 30% h???c ph?? su???t kh??a h???c cho nh???ng th?? sinh tr??ng tuy???n v??o ho??c m???t trong ca??c chuy??n ng??nh thu???c ng??nh Ki???n tr??c, X??y d???ng, M??i tr?????ng, C??ng ngh??? Sinh h???c...
                    </p>
                </div>
            </div>
            <div class="box-new-item">
                <div class="box-new-item-wrap">
                    <img src="./assets/img/logo-star.jpg" alt="" style="width: 75px;margin: 0 22px 0 0;height: 75px;">
                    <div class="box-new-item-content">
                        <h4 style="font-size: 1.3rem">H???c b???ng t??? ?????i h???c l??n Th???c s??, Ti???n s?? cho nh???ng th?? sinh tr??ng tuy???n trong ky?? tuy????n sinh ??a??i ho??c n??m 2022</h4>
                        <p style="opacity: 0.6">10/02/2022</p>
                    </div>
                </div>
                <div class="box-new-item-body">
                    <p class="box-new-item-body-content">
                        Tr?????ng ?????i h???c S?? ph???m K??? thu???t ban h??nh 197 su???t h???c b???ng to??n ph???n t??? tr??nh ????? ?????i h???c l??n Th???c s??, Ti???n s?? v???i t???ng tr??? gi?? h??n 46 T??? ?????ng cho nh???ng th?? sinh tr??ng tuy???n v??o ?????i h???c S?? ph???m K??? thu???t k??? tuy???n sinh n??m 2022.
                    </p>
                </div>
            </div>
            <div class="box-new-item">
                <div class="box-new-item-wrap">
                    <img src="./assets/img/logo-star.jpg" alt="" style="width: 75px;margin: 0 22px 0 0;height: 75px;">
                    <div class="box-new-item-content">
                        <h4 style="font-size: 1.3rem">H???c b???ng To??n ph???n/ B??n ph???n cho Th?? sinh Tr??ng tuy???n v??o c??c ng??nh Ng??n ng??? trong k??? tuy???n sinh ?????i h???c n??m 2022</h4>
                        <p style="opacity: 0.6">10/02/2022</p>
                    </div>
                </div>
                <div class="box-new-item-body">
                    <p class="box-new-item-body-content">
                    Quy???t ?????nh ban h??nh h???c b???ng to??n ph???n v?? b??n ph???n cho th?? sinh tr??ng tuy???n v??o h???c c??c ng??nh Ng??n ng??? Anh, Ng??n ng??? H??n Qu???c, Ng??n ng??? Trung Qu???c v?? Ng??n ng??? Nh???t trong k??? tuy???n sinh ?????i h???c n??m 2022.
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const slider = document.querySelector(".slider");
            const sliderMain = document.querySelector(".slider-main");
            const sliderItems = document.querySelectorAll(".slider-item");
            const nextBtn = document.querySelector(".slider-next");
            const prevBtn = document.querySelector(".slider-prev");
            const dotItems = document.querySelectorAll(".slider-dot-item");
            const sliderItemWidth = sliderItems[0].offsetWidth;
            const sliderLength = sliderItems.length;
            let postionX = 0;
            let index = 0;

            nextBtn.addEventListener("click", function() {
                handleChangeSlider(1)
            });

            prevBtn.addEventListener("click", function() {
                handleChangeSlider(-1)
            });
            [ ... dotItems].forEach((item) => 
                item.addEventListener("click", function(e){
                    [ ... dotItems].forEach((el) => el.classList.remove("active"));
                    const slideIndex = parseInt(e.target.dataset.index);
                    index += slideIndex;
                    index.slideIndex ;
                    postionX = -1 * index * sliderItemWidth;
                    sliderMain.style = `transform: translateX(${postionX}px)`
                })
            )

            function handleChangeSlider(direction){
                if(direction === 1){
                    if(index >= sliderLength-1){
                        index = sliderLength - 1;
                        return;
                    };
                    postionX = postionX - sliderItemWidth
                    sliderMain.style = `transform: translateX(${postionX}px)`
                    index ++;
                }else if(direction === -1){
                    if(index <=0) {
                        index = 0;
                        return;
                    };
                    postionX = postionX + sliderItemWidth
                    sliderMain.style = `transform: translateX(${postionX}px)`
                    index --;
                }
                [ ... dotItems].forEach((el) => el.classList.remove("active"));
                dotItems[index].classList.add("active");

            }
        })

    </script>


</body>

</html>