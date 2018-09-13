var Links = {
    setColor: function (color) {
        var alist = document.querySelectorAll('a');
        var i = 0;
        while (i < alist.length) {
            alist[i].style.color = color;
            i = i + 1;
        }

    }
}
var Body = {
    bodycolor: function (color) {
        document.querySelector('body').style.color = color;
    },
    bodybgcolor: function (color) {
        document.querySelector('body').style.backgroundColor = color;
    }

}
function nightDayhandler(self) {
    var target = document.querySelector('body');
    if (self.value === 'night') {
        Body.bodybgcolor('black');
        Body.bodycolor('white');
        self.value = 'day';

        Links.setColor('yellow');

    } else {
        Body.bodybgcolor('white');
        Body.bodycolor('black');
        self.value = 'night';

        Links.setColor('blue');
    }
}