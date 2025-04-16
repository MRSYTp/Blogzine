//
// export function sidebarOpenCloseByBodyTag() {
//     document.body.addEventListener('click', function () {
//         document.getElementById("main").style.cssText = "margin: 0;"
//     }, true);
// }
//
// export function closeSidebar(){
//     document.getElementById('closedSidebar').addEventListener('click', function () {
//         document.getElementById("main").style.cssText = "margin: 0;";
//     });
// }
//
// export function openSidebar() {
//     document.getElementById('openedSidebar').addEventListener('click', function () {
//         const mediaQuery = window.matchMedia('(min-width: 768px)')
//         if (mediaQuery.matches) {
//             document.getElementById("main").style.cssText = "margin: 0 -260px 0 0;";
//         } else {
//             document.getElementById("main").style.cssText = "margin: 0 -750px 0 0;";
//
//         }
//     });
// }
document.addEventListener("DOMContentLoaded", () => {

    document.body.addEventListener('click', function () {
        document.getElementById("main").style.cssText = "margin: 0;"
    }, true);

    document.getElementById('closedSidebar').addEventListener('click', function () {
        document.getElementById("main").style.cssText = "margin: 0;";
    });

    document.getElementById('openedSidebar').addEventListener('click', function () {
        const mediaQuery = window.matchMedia('(min-width: 768px)')
        if (mediaQuery.matches) {
            document.getElementById("main").style.cssText = "margin: 0 -260px 0 0;";
        } else {
            document.getElementById("main").style.cssText = "margin: 0 -750px 0 0;";

        }
    });
    });
