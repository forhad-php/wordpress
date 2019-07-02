```PHP
// Simply added icon svg path
'menu_icon'           => plugin_dir_url( __FILE__ ) . '../admin/img/wp-menu-icon.svg',

// CONVERT TO BASE64

// Convert online - Icon color not working
'menu_icon'           => 'data:image/svg+xml;base64,' . 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhbHF1ZV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjNDNDRUEyIiBkPSJNNDY5LjMyNSwxMTcuOTI1djI3Ni4xNUg0Mi42NjN2LTI3Ni4xNUw0NjkuMzI1LDExNy45MjUgTTUxMiw3NS4yNjNIMHYzNjEuNDc1aDUxMlY3NS4yNjNMNTEyLDc1LjI2M3oiLz4NCgk8cmVjdCB4PSIxNzAuNjYzIiB5PSIxNjQuMTYzIiBmaWxsPSIjNDNDRUEyIiB3aWR0aD0iMzI4Ljg4NyIgaGVpZ2h0PSI0Mi42NjMiLz4NCgk8cmVjdCB4PSIxNzAuNjYzIiB5PSIxMTAuODA2IiBmaWxsPSIjNDNDRUEyIiB3aWR0aD0iNDIuNjYzIiBoZWlnaHQ9Ijk2LjAxOSIvPg0KCTxyZWN0IHg9IjMxMy43NzUiIHk9IjExNC4zNjkiIGZpbGw9IiM0M0NFQTIiIHdpZHRoPSI0Mi42NjIiIGhlaWdodD0iNzQuNjY5Ii8+DQo8L2c+DQo8L3N2Zz4NCg==',

// Convert by base64_encode() - Icon color not working
'menu_icon'           => 'data:image/svg+xml;base64,' . base64_encode( '<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g><path fill="#43CEA2" d="M469.325,117.925v276.15H42.663v-276.15L469.325,117.925 M512,75.263H0v361.475h512V75.263L512,75.263z"/><rect x="170.663" y="164.163" fill="#43CEA2" width="328.887" height="42.663"/><rect x="170.663" y="110.806" fill="#43CEA2" width="42.663" height="96.019"/><rect x="313.775" y="114.369" fill="#43CEA2" width="42.662" height="74.669"/></g></svg>' ),

// Added encoded url into href attribute - Working color
'menu_icon'           => 'data:image/svg+xml;base64,' . base64_encode( '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">  <image id="image0" width="256" height="256" x="0" y="0" href="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhbHF1ZV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjNDNDRUEyIiBkPSJNNDY5LjMyNSwxMTcuOTI1djI3Ni4xNUg0Mi42NjN2LTI3Ni4xNUw0NjkuMzI1LDExNy45MjUgTTUxMiw3NS4yNjNIMHYzNjEuNDc1aDUxMlY3NS4yNjNMNTEyLDc1LjI2M3oiLz4NCgk8cmVjdCB4PSIxNzAuNjYzIiB5PSIxNjQuMTYzIiBmaWxsPSIjNDNDRUEyIiB3aWR0aD0iMzI4Ljg4NyIgaGVpZ2h0PSI0Mi42NjMiLz4NCgk8cmVjdCB4PSIxNzAuNjYzIiB5PSIxMTAuODA2IiBmaWxsPSIjNDNDRUEyIiB3aWR0aD0iNDIuNjYzIiBoZWlnaHQ9Ijk2LjAxOSIvPg0KCTxyZWN0IHg9IjMxMy43NzUiIHk9IjExNC4zNjkiIGZpbGw9IiM0M0NFQTIiIHdpZHRoPSI0Mi42NjIiIGhlaWdodD0iNzQuNjY5Ii8+DQo8L2c+DQo8L3N2Zz4NCg==" /></svg>' ),
```