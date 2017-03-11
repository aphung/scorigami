<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <canvas id="grid"></canvas>
    
        <script type="text/javascript">
            var drawGrid = function(w, h, id) {
                var canvas = document.getElementById(id);
                var ctx = canvas.getContext('2d');
                ctx.canvas.width  = w;
                ctx.canvas.height = h;
                
                var data = '<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"> \
                    <defs> \
                        <pattern id="smallGrid" width="15" height="15" patternUnits="userSpaceOnUse"> \
                            <path d="M 15 0 L 0 0 0 15" fill="none" stroke="black" stroke-width="0.5" /> \
                        </pattern> \
                        <pattern id="grid" width="80" height="80" patternUnits="userSpaceOnUse"> \
                            <rect width="80" height="80" fill="url(#smallGrid)" /> \
                            <path d="M 80 0 L 0 0 0 80" fill="none" stroke="black" stroke-width="1" /> \
                        </pattern> \
                    </defs> \
                    <rect width="100%" height="100%" fill="url(#smallGrid)" /> \
                </svg>';

                var DOMURL = window.URL || window.webkitURL || window;
                
                var img = new Image();
                var svg = new Blob([data], {type: 'image/svg+xml;charset=utf-8'});
                var url = DOMURL.createObjectURL(svg);
                
                img.onload = function () {
                ctx.drawImage(img, 0, 0);
                DOMURL.revokeObjectURL(url);
                }
                img.src = url;
            }
            drawGrid(1024, 600, "grid");
        </script>
    </body>
</html>
