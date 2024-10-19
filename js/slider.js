var images =['img/slider11.jpg',
        'img/slider22.jpg',
        'img/slider33.jpg',
        'img/slider55.jpg',
]

var i=0 ;

function slides(){
    document.getElementById('slideimage').src = images[i];
    if(i<(images.length-1))
        i++;
    else
        i=0;

}

setInterval( slides , 1000); 