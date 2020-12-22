// function spanWrap() {
//   const target = document.querySelector('h1.masthead-heading.text-uppercase.mb-0');
//   const nodes = target.childNodes;

//   let convert = [];

//   for (let node of nodes) {
//     if (node.nodeType == 3) {//テキストの場合
//       let text = node.textContent.replace(/\s+/g, '');
//       text.split('').forEach((v) => {
//         convert.push("<span>" + v + "</span>");
//       });

//     } else {//テキスト以外
//       convert.push(node.outerHTML);
//     }
//   }
//   target.innerHTML = convert.join("");
// }

// alert('test1');

// spanWrap();