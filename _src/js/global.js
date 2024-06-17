// export const globalFunc = () => {
//     // SPで100pxスクロールでnavigationを下部固定
//   // 監視対象
//   const navigation = document.getElementById("navigation");
//   // breakpointの値をCSS変数の--breakpoint-sで取得
//   const rootStyles = getComputedStyle(document.documentElement);
//   const breakpointS = rootStyles.getPropertyValue("--break-m");
//   // ブレイクポイントの値を元にmatchMediaを設定
//   const mediaQueryList = window.matchMedia(`(width >= ${breakpointS})`);
//   // メディアクエリの状態が変わった時の処理
//   const mediaQueryFunction = (e) => {
//     if (e.matches) {
//       window.addEventListener("scroll", function () {
//         navigation.dataset.fixed = window.scrollY > 100 ? 'true' : 'false';
//       });
//     }
//   };
//   // メディアクエリを跨いだ時のみ処理が走るように設定
//   mediaQueryList.addEventListener('change', mediaQueryFunction);
//   mediaQueryFunction(mediaQueryList);
// }