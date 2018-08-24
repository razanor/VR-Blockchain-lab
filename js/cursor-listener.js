"use strict";

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
        });
    }
});

AFRAME.registerComponent('cursor-leave', {
    init: function () {
        var el = this.el;
        el.addEventListener('mouseleave', function (evt) {
            let index = el.children[0].getAttribute('id');
            index = index.slice(6);
            document.getElementById("author"+ index).setAttribute("visible", "false");
            document.getElementById("text"+ index).setAttribute("visible", "false");
        });
    }
});

AFRAME.registerComponent('cursor-enter', {
    init: function () {
        var el = this.el;
        el.addEventListener('mouseenter', function (evt) {
            let index = el.children[0].getAttribute('id');
            index = index.slice(6);
            document.getElementById("author"+ index).setAttribute("visible", "true");
            document.getElementById("text"+ index).setAttribute("visible", "true");
        });
    }
});
