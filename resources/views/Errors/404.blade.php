<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,500">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
            type="text/javascript"></script>

</head>
<body>

<svg width="380px" height="500px" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z"
              id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z"
              id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z"
              id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z"
              id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup"></path>
        <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z"
              id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup"></path>
    </g>
</svg>
<div class="message-box">
    <h1 data-count="404">0</h1>
    <p>Page not found</p>
    <div class="buttons-con">
        <div class="action-link-wrap">
            <a onclick="history.back(-1)" class="link-button link-back-button">Go Back</a>
            <a href="" class="link-button">Go to Home Page</a>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.3up.dk/in-view@0.6.1"></script>
<script>
    var formatThousandsNoRounding = function (n, dp) {
        var e = '', s = e + n, l = s.length, b = n < 0 ? 1 : 0,
            i = s.lastIndexOf(','), j = i == -1 ? l : i,
            r = e, d = s.substr(j + 1, dp);
        while ((j -= 3) > b) {
            r = '.' + s.substr(j, 3) + r;
        }
        return s.substr(0, j + 3) + r +
            (dp ? ',' + d + (d.length < dp ?
                ('00000').substr(0, dp - d.length) : e) : e);
    };

    var hasRun = false;

    inView('#countUp').on('enter', function () {
        if (hasRun == false) {
            $('.number').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'linear',
                        step: function () {
                            $this.text(formatThousandsNoRounding(Math.floor(this.countNum)));
                        },
                        complete: function () {
                            $this.text(formatThousandsNoRounding(this.countNum));
                        }
                    });
            });
            hasRun = true;
        }
    });
</script>
