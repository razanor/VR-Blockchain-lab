"use strict";
var flag = 0;

AFRAME.registerComponent('cursor-english', {
    init: function () {
        var el = this.el;
        el.addEventListener('click', function (evt) {
            for (let i = 0; i < picAuthor.length; i++) {
                let author = document.getElementById('author' + i);
                let description = document.getElementById('text' + i);
                author.setAttribute('value', picAuthor[i]);
                description.setAttribute('value', picDescription[i]);
            }
            el.children[0].setAttribute('color', "#0d082b");
            document.getElementById("ukrainian").setAttribute("color", "#ffffff");
            document.getElementById("choose-lan").setAttribute('repeat', '0');
            flag = 1;
        });
    }
});

AFRAME.registerComponent('cursor-ukrainian', {
    init: function () {
        var el = this.el;
        el.addEventListener('click', function (evt) {
            for (let i = 0; i < picAuthor.length; i++) {
                let author = document.getElementById('author' + i);
                let description = document.getElementById('text' + i);
                author.setAttribute('value', "Not yet!");
                description.setAttribute('value',"Ukrainian will be here soon.");
            }
            el.children[0].setAttribute('color', "#0d082b");
            document.getElementById("english").setAttribute("color", "#ffffff");
            document.getElementById("choose-lan").setAttribute('repeat', '0');
            flag = 1;
        });
    }
});

AFRAME.registerComponent('cursor-close', {
    init: function () {
        var el = this.el;
        el.addEventListener('click', function (evt) {
            let index = el.getAttribute('id');
            index = index.slice(5);
            document.getElementById("author"+ index).setAttribute("visible", "false");
            document.getElementById("text"+ index).setAttribute("visible", "false");
            el.setAttribute("visible", "false");
        });
    }
});

AFRAME.registerComponent('cursor-enter', {
    init: function () {
        var el = this.el;
        el.addEventListener('click', function (evt) {
            let index = el.children[0].getAttribute('id');
            index = index.slice(6);
            setVisibleToFalse();
            if (flag === 1) {
                document.getElementById("author" + index).setAttribute("visible", "true");
                document.getElementById("text" + index).setAttribute("visible", "true");
                document.getElementById("close" + index).setAttribute("visible", "true");
            }
        });
    }
});

function setVisibleToFalse() {
    for (let i = 0; i < picAuthor.length ; i++) {
        document.getElementById("close"+ i).setAttribute("visible", "false");
        document.getElementById("author" + i).setAttribute("visible", "false");
        document.getElementById("text" + i).setAttribute("visible", "false");
    }
}
