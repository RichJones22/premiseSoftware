/*
 psNS used for premise software application nameSpacing

 file name: psNS.js
 */
if (typeof psNS === 'undefined') {
    var psNS = {     // Javascript nuance... leave psNS as var... this needs to be global scope!
        namespace: function() {
            let a = arguments, o = null, i, j, d;
            for (i = 0; i < a.length; i++) {
                d = a[i].split(".");
                o = this;
                for (j = 0; j < d.length; j++) {
                    o[d[j]] = o[d[j]] || {};
                    o = o[d[j]];
                }
            }
            return o;
        }
    };
}


