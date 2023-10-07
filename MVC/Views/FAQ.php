<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ?</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        body{
            background: #eee;
            padding-top: 20px;
            font-family: -webkit-pictograph;
        }
        .header{
            border-radius: 20px 20px 0px 0px;
            padding: 10px 0px;
            background: purple;
            color: #fff;
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
        }
        .faq-item{
            margin-bottom: 40px;
            margin-top: 40px;
        }
        .faq-body{
            display: none;
            margin-top: 30px;
        }
        .faq-wrapper{
            width: 70%;
            margin: 0 auto;
        }
        .faq-inner{
            padding: 30px;
            background: aliceblue;
        }
        .faq-plus{
            float: right;
            font-size: 1.4em;
            line-height: 1em;
            cursor: pointer;
        }
        hr{
            background-color: #9b9b9b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="faq-wrapper">
                <div class="header">
                <h1>FAQs</h1>
                </div>
                <div class="faq-inner">
                    <div class="faq-item">
                        <h3>
                            What is an FAQ page?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam dolores voluptatibus eius ullam voluptates consequatur atque nihil. Sequi suscipit molestias, aliquam amet veniam quae laboriosam praesentium accusantium enim hic!
                        </div>
                    </div>
                    <hr>

                    <div class="faq-item">
                        <h3>
                            What is an FAQ page?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam dolores voluptatibus eius ullam voluptates consequatur atque nihil. Sequi suscipit molestias, aliquam amet veniam quae laboriosam praesentium accusantium enim hic!
                        </div>
                    </div>
                    <hr>

                    <div class="faq-item">
                        <h3>
                            What is an FAQ page?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam dolores voluptatibus eius ullam voluptates consequatur atque nihil. Sequi suscipit molestias, aliquam amet veniam quae laboriosam praesentium accusantium enim hic!
                        </div>
                    </div>
                    <hr>

                    <div class="faq-item">
                        <h3>
                            What is an FAQ page?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam dolores voluptatibus eius ullam voluptates consequatur atque nihil. Sequi suscipit molestias, aliquam amet veniam quae laboriosam praesentium accusantium enim hic!
                        </div>
                    </div>
                    <hr>

                    <div class="faq-item">
                        <h3>
                            What is an FAQ page?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam dolores voluptatibus eius ullam voluptates consequatur atque nihil. Sequi suscipit molestias, aliquam amet veniam quae laboriosam praesentium accusantium enim hic!
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".faq-plus").on('click', function(){
            $(this).parent().parent().find('.faq-body').slideToggle();
        });
    </script>
</body>
</html>