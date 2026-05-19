<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh Mì Vela</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#fff8f0;
            color:#333;
        }

        header{
            background:#d35400;
            color:white;
            padding:20px;
            text-align:center;
        }

        nav{
            background:#e67e22;
            padding:10px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:bold;
        }

        .hero{
            height:400px;
            background:url('https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1200') center/cover;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
            text-shadow:2px 2px 5px black;
            font-size:40px;
            font-weight:bold;
        }

        .container{
            width:90%;
            margin:auto;
            padding:40px 0;
        }

        .products{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
            justify-content:center;
        }

        .card{
            width:300px;
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,0.2);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:200px;
            object-fit:cover;
        }

        .card-content{
            padding:15px;
        }

        .card-content h3{
            margin-bottom:10px;
            color:#d35400;
        }

        .price{
            color:red;
            font-size:20px;
            font-weight:bold;
            margin:10px 0;
        }

        button{
            background:#d35400;
            color:white;
            border:none;
            padding:10px 15px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#a84300;
        }

        footer{
            background:#222;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>BÁNH MÌ VELA</h1>
        <p>Ngon - Nóng - Giòn mỗi ngày</p>
    </header>

    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Khuyến mãi</a>
        <a href="#">Liên hệ</a>
    </nav>

    <section class="hero">
        Bánh Mì Chuẩn Vị Việt
    </section>

    <div class="container">
        <h2 style="text-align:center; margin-bottom:30px;">
            Sản phẩm nổi bật
        </h2>

        <div class="products">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1608039755401-742074f0548d?q=80&w=1200">
                <div class="card-content">
                    <h3>Bánh mì thịt nướng</h3>
                    <p>Thịt nướng thơm ngon, rau tươi và nước sốt đặc biệt.</p>
                    <div class="price">25.000đ</div>
                    <button>Mua ngay</button>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?q=80&w=1200">
                <div class="card-content">
                    <h3>Bánh mì chả lụa</h3>
                    <p>Chả lụa truyền thống kết hợp rau dưa tươi sạch.</p>
                    <div class="price">20.000đ</div>
                    <button>Mua ngay</button>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1200">
                <div class="card-content">
                    <h3>Bánh mì đặc biệt</h3>
                    <p>Đầy đủ pate, xúc xích, thịt nguội và trứng.</p>
                    <div class="price">35.000đ</div>
                    <button>Mua ngay</button>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <p>© 2026 Bánh Mì Vela | Hotline: 0123 456 789</p>
    </footer>

</body>
</html>