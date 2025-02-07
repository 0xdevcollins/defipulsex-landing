@extends('app')

@section('content')
    <section class="contact-section section-padding fix">
        <div class="container">
            <div class="contact-wrapper style1">
                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="contact-info-box style1">
                            <div class="contact-content">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"
                                        fill="none">
                                        <path
                                            d="M40.1533 6.25004C39.2892 6.24379 38.5845 6.9391 38.5783 7.8016C38.572 8.6641 39.2658 9.36879 40.1298 9.37504C40.9923 9.38129 41.697 8.68754 41.7033 7.82504C41.7095 6.96254 41.0158 6.25785 40.1533 6.25004ZM40.0822 15.6249C34.0492 15.5821 29.1084 20.4491 29.0628 26.4802C29.0173 32.511 33.887 37.4541 39.9181 37.4996L40.0019 37.4999C45.9945 37.4999 50.8922 32.6474 50.9375 26.6443C50.983 20.6138 46.1134 15.6704 40.0822 15.6249ZM40.0016 34.375L39.9416 34.3747C35.6336 34.3422 32.1552 30.8113 32.1877 26.5036C32.22 22.2154 35.7181 18.7494 39.9988 18.7494L40.0588 18.7497C44.3667 18.7822 47.8452 22.3132 47.8127 26.6208C47.7802 30.9091 44.2822 34.375 40.0016 34.375ZM46.8175 7.43504C46.0047 7.1466 45.1111 7.57239 44.8227 8.38582C44.5344 9.19926 44.9602 10.0922 45.7734 10.3807C52.6558 12.8199 57.2425 19.3747 57.1875 26.6914C57.1811 27.5543 57.8753 28.2591 58.7383 28.2657H58.7503C59.6075 28.2657 60.3059 27.5738 60.3125 26.7149C60.3775 18.0669 54.9542 10.3189 46.8175 7.43504Z"
                                            fill="#7444FD" />
                                        <path
                                            d="M49.5876 58.8191C59.9803 45.4417 66.4751 38.4659 66.5628 26.7622C66.6728 12.0367 54.7225 0 39.9981 0C25.4456 0 13.549 11.7856 13.4384 26.3638C13.349 38.3848 19.9645 45.3511 30.4289 58.8169C20.0187 60.3725 13.4384 64.2814 13.4384 69.0625C13.4384 72.2652 16.3987 75.1391 21.7742 77.1547C26.6668 78.9894 33.1398 79.9998 40.0006 79.9998C46.8614 79.9998 53.3343 78.9894 58.227 77.1547C63.6025 75.1389 66.5628 72.265 66.5628 69.0623C66.5628 64.2839 59.9885 60.3759 49.5876 58.8191ZM16.5632 26.3873C16.6607 13.5234 27.1568 3.125 39.9984 3.125C52.992 3.125 63.5348 13.7481 63.4379 26.7389C63.3548 37.8536 56.467 44.7031 45.4706 59.038C43.5092 61.5936 41.7079 64.0098 40.0029 66.3734C38.3029 64.0084 36.5376 61.6355 34.5468 59.037C23.0959 44.102 16.4786 37.7702 16.5632 26.3873ZM40.0006 76.875C26.5864 76.875 16.5632 72.7505 16.5632 69.0625C16.5632 66.3275 22.5551 62.8725 32.6298 61.6761C34.8568 64.5981 36.8093 67.2528 38.7243 69.9641C38.8685 70.1682 39.0595 70.3347 39.2813 70.4497C39.5031 70.5647 39.7493 70.6248 39.9992 70.625H40.0006C40.2502 70.625 40.4963 70.5652 40.718 70.4505C40.9398 70.3359 41.1309 70.1698 41.2753 69.9661C43.1721 67.2902 45.1781 64.57 47.3861 61.6778C57.4514 62.8755 63.4379 66.3294 63.4379 69.0627C63.4378 72.7505 53.4148 76.875 40.0006 76.875Z"
                                            fill="#7444FD" />
                                    </svg>
                                </div>
                                <div class="title">Our Address</div>
                                <a class="text" href="#">462W center Street, Rockfall Florida</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact-info-box style1">
                            <div class="contact-content">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                        viewBox="0 0 70 70" fill="none">
                                        <g clip-path="url(#clip0_268_873)">
                                            <path
                                                d="M36.4441 39.654C33.8291 39.6416 31.2312 39.2317 28.7394 38.4383C26.7837 37.784 25.0366 36.6225 23.6765 35.0724C22.3164 33.5222 21.3919 31.639 20.9974 29.6148C20.1189 25.3845 21.7208 20.9115 25.3888 17.3415C25.7828 16.9579 26.1923 16.5905 26.6161 16.2401C28.4664 14.691 30.6658 13.6154 33.0246 13.1063C35.3835 12.5971 37.8308 12.6696 40.1553 13.3176C42.3846 14.0295 44.3389 15.4138 45.7502 17.2806C47.1614 19.1474 47.9603 21.4052 48.0373 23.7441C48.2083 26.5031 47.3091 29.2217 45.5266 31.3345C44.8523 32.1837 43.957 32.8307 42.9391 33.2045C41.9212 33.5782 40.8199 33.6643 39.7563 33.4531C39.3174 33.362 38.9014 33.1834 38.5331 32.9278C38.1649 32.6722 37.852 32.3449 37.6131 31.9656C37.3988 31.5971 37.261 31.1892 37.2081 30.7662C37.1552 30.3432 37.1882 29.9139 37.3051 29.504C38.3259 25.647 39.3631 19.7856 39.3736 19.7273C39.4003 19.5764 39.4564 19.4322 39.5388 19.303C39.6211 19.1738 39.7282 19.062 39.8537 18.9742C39.9793 18.8863 40.1209 18.824 40.2706 18.7909C40.4202 18.7578 40.5749 18.7545 40.7258 18.7811C40.8767 18.8078 41.0209 18.8639 41.1501 18.9463C41.2793 19.0287 41.391 19.1357 41.4789 19.2613C41.5668 19.3868 41.629 19.5285 41.6621 19.6781C41.6953 19.8277 41.6986 19.9824 41.6719 20.1333C41.6288 20.3771 40.6068 26.1498 39.5614 30.1001C39.5246 30.2085 39.5103 30.3233 39.5193 30.4375C39.5283 30.5516 39.5605 30.6627 39.6139 30.764C39.7754 30.987 40.0187 31.1368 40.2906 31.1805C40.942 31.2892 41.6106 31.2179 42.2244 30.9743C42.8382 30.7306 43.3737 30.3239 43.7731 29.798C45.1573 28.1421 45.8508 26.0168 45.7098 23.8631C45.6541 22.0012 45.0236 20.2022 43.9048 18.7128C42.7861 17.2235 41.2338 16.1169 39.4611 15.5448C37.5081 15.0076 35.4538 14.9536 33.4753 15.3876C31.4968 15.8215 29.6536 16.7304 28.1048 18.0356C27.7303 18.3471 27.3651 18.6726 27.0151 19.0133C25.2021 20.7773 22.3053 24.4383 23.2818 29.14C23.6041 30.7541 24.3427 32.2561 25.4242 33.497C26.5057 34.7379 27.8926 35.6747 29.4476 36.2146C34.9193 37.96 42.7826 38.1711 46.9243 33.0203C47.1205 32.7869 47.4002 32.6396 47.7037 32.6099C48.0071 32.5802 48.3101 32.6705 48.5478 32.8614C48.7855 33.0523 48.9391 33.3287 48.9756 33.6314C49.0121 33.9341 48.9286 34.239 48.7431 34.481C45.6794 38.2913 41.0174 39.654 36.4441 39.654Z"
                                                fill="white" />
                                            <path
                                                d="M32.4537 33.606C31.2203 33.6275 30.0172 33.2233 29.047 32.4615C26.8082 30.6695 26.7463 27.5556 27.374 25.4358C27.5863 24.73 27.8698 24.0475 28.2222 23.4C29.0975 21.6337 30.4971 20.1811 32.2297 19.2408C33.2805 18.6957 34.4787 18.5031 35.6474 18.6913C36.8161 18.8795 37.8933 19.4387 38.7198 20.2861C39.5617 21.2087 40.1959 22.3012 40.5795 23.4898C40.6759 23.7795 40.655 24.0954 40.5211 24.3699C40.3873 24.6443 40.1512 24.8553 39.8635 24.9576C39.5758 25.0599 39.2595 25.0453 38.9824 24.9171C38.7054 24.7888 38.4896 24.557 38.3815 24.2715C38.1049 23.3936 37.6452 22.5844 37.0328 21.8973C36.5514 21.4048 35.9222 21.0832 35.241 20.9815C34.5599 20.8798 33.8642 21.0035 33.2598 21.3338C31.9605 22.0666 30.9163 23.1792 30.2673 24.5223C29.9948 25.0257 29.7747 25.5559 29.6105 26.1043C29.1567 27.6373 29.257 29.6393 30.5077 30.6403C31.875 31.7393 34.1827 31.275 35.4812 30.155C36.4484 29.2837 37.2793 28.2722 37.9463 27.1543C38.0271 27.0241 38.1328 26.911 38.2573 26.8217C38.3818 26.7323 38.5227 26.6683 38.6719 26.6333C38.8212 26.5984 38.9758 26.5932 39.1271 26.618C39.2783 26.6429 39.4232 26.6972 39.5534 26.778C39.6836 26.8589 39.7967 26.9645 39.8861 27.089C39.9754 27.2135 40.0394 27.3544 40.0744 27.5037C40.1093 27.6529 40.1145 27.8076 40.0897 27.9588C40.0649 28.11 40.0105 28.2549 39.9297 28.3851C39.1389 29.7021 38.1545 30.8926 37.0095 31.9166C35.7339 32.993 34.1226 33.5904 32.4537 33.606Z"
                                                fill="white" />
                                            <path
                                                d="M66.5 69.9993H3.5C2.57203 69.9984 1.68233 69.6293 1.02615 68.9731C0.369973 68.317 0.000926812 67.4273 2.2814e-07 66.4993V23.3326C-0.000138442 23.1108 0.0629417 22.8936 0.181848 22.7064C0.300754 22.5192 0.470559 22.3697 0.671362 22.2756C0.872165 22.1814 1.09565 22.1465 1.31561 22.1748C1.53558 22.2031 1.74292 22.2935 1.91333 22.4355L30.5387 46.2261C31.7943 47.2637 33.3723 47.8312 35.0012 47.8312C36.63 47.8312 38.208 47.2637 39.4637 46.2261L68.0867 22.4343C68.2572 22.2923 68.4646 22.2018 68.6847 22.1736C68.9047 22.1453 69.1283 22.1804 69.3292 22.2747C69.53 22.369 69.6998 22.5186 69.8186 22.706C69.9374 22.8934 70.0004 23.1107 70 23.3326V66.4993C69.9991 67.4273 69.63 68.317 68.9738 68.9731C68.3177 69.6293 67.428 69.9984 66.5 69.9993ZM2.33333 25.8188V66.4993C2.33333 67.1433 2.856 67.666 3.5 67.666H66.5C66.8094 67.666 67.1062 67.543 67.325 67.3243C67.5437 67.1055 67.6667 66.8087 67.6667 66.4993V25.8188L40.9523 48.0205C39.2778 49.4044 37.1734 50.1616 35.001 50.1621C32.8286 50.1625 30.7239 49.406 29.0488 48.0228L2.33333 25.8188Z"
                                                fill="white" />
                                            <path
                                                d="M1.16894 24.4994C0.921179 24.4998 0.679694 24.4214 0.479472 24.2755C0.279249 24.1296 0.130687 23.9237 0.0553064 23.6876C-0.0200742 23.4516 -0.0183585 23.1977 0.0602049 22.9628C0.138768 22.7278 0.2901 22.5239 0.492276 22.3807L10.9923 14.9374C11.2448 14.7584 11.558 14.687 11.8631 14.739C12.1682 14.7909 12.4402 14.962 12.6192 15.2144C12.7982 15.4669 12.8696 15.7802 12.8176 16.0853C12.7656 16.3904 12.5946 16.6624 12.3421 16.8414L1.84211 24.2847C1.64551 24.4245 1.4102 24.4996 1.16894 24.4994ZM68.8333 24.4994C68.592 24.4996 68.3567 24.4245 68.1601 24.2847L57.6601 16.8414C57.4103 16.6615 57.2417 16.3901 57.191 16.0865C57.1404 15.7828 57.2118 15.4714 57.3898 15.2202C57.5677 14.969 57.8378 14.7983 58.141 14.7453C58.4443 14.6923 58.7562 14.7614 59.0088 14.9374L69.5088 22.3807C69.7108 22.5238 69.862 22.7275 69.9407 22.9622C70.0193 23.197 70.0212 23.4506 69.9461 23.6865C69.871 23.9224 69.7228 24.1283 69.523 24.2745C69.3232 24.4206 69.0808 24.4993 68.8333 24.4994ZM45.7811 8.16603C45.5395 8.16624 45.3038 8.09122 45.1068 7.95136L39.5301 3.99636C38.2758 2.93613 36.689 2.34988 35.0466 2.33986C33.4043 2.32984 31.8105 2.89668 30.5433 3.94152L24.8966 7.95136C24.6441 8.13036 24.3309 8.20173 24.0258 8.14976C23.7207 8.0978 23.4487 7.92676 23.2697 7.67427C23.0907 7.42179 23.0193 7.10854 23.0713 6.80343C23.1233 6.49832 23.2943 6.22636 23.5468 6.04736L29.1234 2.09236C30.7941 0.726275 32.8883 -0.0155566 35.0463 -0.00576365C37.2044 0.00402929 39.2917 0.764835 40.9499 2.14602L46.4566 6.04736C46.6588 6.19058 46.8101 6.39444 46.8887 6.62942C46.9672 6.8644 46.969 7.11829 46.8936 7.35431C46.8182 7.59033 46.6696 7.79622 46.4694 7.94216C46.2692 8.0881 46.0277 8.16651 45.7799 8.16603H45.7811ZM1.92611 69.3694C1.68588 69.3698 1.45136 69.2961 1.25458 69.1583C1.0578 69.0205 0.908365 68.8253 0.826677 68.5994C0.744989 68.3735 0.735034 68.1279 0.798172 67.8961C0.86131 67.6643 0.994463 67.4576 1.17944 67.3044L27.8028 45.1844C27.9207 45.0865 28.0567 45.0127 28.2031 44.9674C28.3495 44.9221 28.5033 44.906 28.6559 44.9202C28.8085 44.9343 28.9568 44.9783 29.0924 45.0498C29.228 45.1213 29.3481 45.2187 29.446 45.3366C29.5439 45.4545 29.6176 45.5905 29.663 45.7369C29.7083 45.8833 29.7244 46.0372 29.7102 46.1898C29.6961 46.3424 29.652 46.4907 29.5806 46.6262C29.5091 46.7618 29.4117 46.882 29.2938 46.9799L2.67044 69.0999C2.46147 69.274 2.1981 69.3693 1.92611 69.3694ZM68.0749 69.3694C67.8029 69.3696 67.5394 69.2742 67.3306 69.0999L40.7073 46.9799C40.5863 46.883 40.4859 46.763 40.4119 46.6268C40.3379 46.4907 40.2917 46.3412 40.2761 46.187C40.2604 46.0328 40.2757 45.8771 40.3209 45.7289C40.3661 45.5807 40.4404 45.443 40.5395 45.3238C40.6385 45.2046 40.7603 45.1063 40.8977 45.0347C41.0351 44.9631 41.1855 44.9196 41.3399 44.9068C41.4943 44.8939 41.6497 44.9119 41.7971 44.9598C41.9445 45.0076 42.0809 45.0844 42.1983 45.1855L68.8216 67.3055C69.0066 67.4588 69.1397 67.6655 69.2029 67.8972C69.266 68.129 69.2561 68.3747 69.1744 68.6006C69.0927 68.8265 68.9433 69.0217 68.7465 69.1595C68.5497 69.2973 68.3152 69.3698 68.0749 69.3694Z"
                                                fill="white" />
                                            <path
                                                d="M58.3333 33.2261C58.0239 33.2261 57.7272 33.1032 57.5084 32.8844C57.2896 32.6656 57.1667 32.3689 57.1667 32.0594V8.17543C57.1632 8.19876 57.1165 8.1661 57.0383 8.1661H12.9617C12.9362 8.16456 12.9106 8.16821 12.8865 8.17683C12.8625 8.18546 12.8404 8.19887 12.8217 8.21626L12.8333 32.0594C12.8333 32.3689 12.7104 32.6656 12.4916 32.8844C12.2728 33.1032 11.9761 33.2261 11.6667 33.2261C11.3572 33.2261 11.0605 33.1032 10.8417 32.8844C10.6229 32.6656 10.5 32.3689 10.5 32.0594V8.1661C10.5183 7.53068 10.7876 6.9284 11.249 6.49109C11.7104 6.05379 12.3262 5.81707 12.9617 5.83276H57.0383C57.6738 5.81707 58.2896 6.05379 58.751 6.49109C59.2124 6.9284 59.4817 7.53068 59.5 8.1661V32.0594C59.5 32.3689 59.3771 32.6656 59.1583 32.8844C58.9395 33.1032 58.6428 33.2261 58.3333 33.2261Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_268_873">
                                                <rect width="70" height="70" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h3 class="title" style="text-transform: lowercase">
                                    <a href="mailto:info@defipulsex.org"> info@defipulsex.org </a>
                                </h3>

                                <p class="text">Email us anytime for any kind of question.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="contact-info-box style1">
                            <div class="contact-content">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                        viewBox="0 0 70 70" fill="none">
                                        <path
                                            d="M63.4214 54.3759C63.4171 53.4634 63.2325 52.5607 62.8781 51.7198C62.5237 50.8788 62.0065 50.1163 61.3564 49.4759L55.4064 43.5749C54.1048 42.2791 52.343 41.5517 50.5064 41.5519C49.5916 41.5619 48.6877 41.7526 47.8468 42.113C47.0059 42.4734 46.2445 42.9964 45.6064 43.6519L42.5474 46.7459C41.5114 47.3129 35.9324 44.7089 30.7034 39.5289C25.4744 34.3489 22.7514 28.6999 23.2904 27.7059L26.3704 24.5979C27.6771 23.2797 28.4068 21.4964 28.3989 19.6402C28.391 17.7841 27.6463 16.007 26.3284 14.6999L20.3854 8.80592C19.0644 7.50849 17.2879 6.77982 15.4364 6.77592C14.5214 6.78514 13.6174 6.97546 12.7764 7.3359C11.9354 7.69633 11.174 8.21974 10.5364 8.87592L3.95638 15.4769C1.23338 18.1999 1.54138 23.4709 4.83138 30.2469C7.90438 36.5469 13.2314 43.7009 19.8954 50.2879C29.5694 59.8779 41.7704 67.8999 49.5614 67.8999C50.528 67.9492 51.4947 67.8022 52.403 67.4677C53.3113 67.1333 54.1425 66.6183 54.8464 65.9539L61.3984 59.3459C62.0459 58.6913 62.5579 57.9153 62.905 57.0625C63.2521 56.2096 63.4276 55.2967 63.4214 54.3759ZM59.4104 57.3509L52.8584 63.9589C49.2954 67.5499 35.7014 62.0059 21.8694 48.2999C15.4434 41.9299 10.2844 35.0839 7.35138 29.0219C4.69838 23.5619 4.17338 19.2219 5.95138 17.4439L12.5034 10.8359C13.2857 10.0489 14.3477 9.60346 15.4574 9.59692C16.0046 9.59604 16.5466 9.70318 17.0523 9.91219C17.558 10.1212 18.0175 10.428 18.4044 10.8149L24.3544 16.7089C25.1345 17.4956 25.5722 18.5585 25.5722 19.6664C25.5722 20.7743 25.1345 21.8373 24.3544 22.6239L21.2744 25.7389C19.9234 27.0969 20.2104 29.5539 22.1354 33.0399C23.9074 36.1232 26.093 38.9494 28.6314 41.4399C31.1471 43.9616 33.9971 46.1261 37.1014 47.8729C40.6014 49.7629 43.0654 50.0359 44.4164 48.6779L47.4964 45.5629C48.2787 44.7759 49.3407 44.3305 50.4504 44.3239C51.5512 44.3267 52.6069 44.7616 53.3904 45.5349L59.3404 51.4359C60.1205 52.2226 60.5582 53.2856 60.5582 54.3934C60.5582 55.5013 60.1205 56.5643 59.3404 57.3509H59.4104ZM66.5014 34.8039C66.8727 34.8039 67.2288 34.6564 67.4913 34.3939C67.7539 34.1313 67.9014 33.7752 67.9014 33.4039C67.8921 25.1242 64.5994 17.1862 58.7454 11.3309C52.8914 5.47555 44.9541 2.18104 36.6744 2.16992C36.3031 2.16992 35.947 2.31742 35.6844 2.57997C35.4219 2.84252 35.2744 3.19862 35.2744 3.56992C35.2744 3.94123 35.4219 4.29732 35.6844 4.55987C35.947 4.82242 36.3031 4.96992 36.6744 4.96992C44.2121 4.97919 51.4382 7.9781 56.7675 13.3087C62.0968 18.6393 65.094 25.8662 65.1014 33.4039C65.1014 33.7752 65.2489 34.1313 65.5114 34.3939C65.774 34.6564 66.1301 34.8039 66.5014 34.8039Z"
                                            fill="#7444FD" />
                                        <path
                                            d="M55.0624 33.403C55.0624 33.7743 55.2099 34.1304 55.4725 34.393C55.735 34.6555 56.0911 34.803 56.4624 34.803C56.8337 34.803 57.1898 34.6555 57.4524 34.393C57.7149 34.1304 57.8624 33.7743 57.8624 33.403C57.8569 27.7844 55.6229 22.3974 51.6506 18.4238C47.6783 14.4502 42.292 12.2144 36.6734 12.207C36.3021 12.207 35.946 12.3545 35.6835 12.6171C35.4209 12.8796 35.2734 13.2357 35.2734 13.607C35.2734 13.9783 35.4209 14.3344 35.6835 14.597C35.946 14.8595 36.3021 15.007 36.6734 15.007C41.5494 15.0144 46.2235 16.9552 49.6707 20.4037C53.1179 23.8522 55.0569 28.527 55.0624 33.403ZM35.2734 23.645C35.2734 24.0163 35.4209 24.3724 35.6835 24.635C35.946 24.8975 36.3021 25.045 36.6734 25.045C38.8855 25.0579 41.0032 25.9428 42.5667 27.5077C44.1303 29.0725 45.0134 31.191 45.0244 33.403C45.0244 33.7743 45.1719 34.1304 45.4345 34.393C45.697 34.6555 46.0531 34.803 46.4244 34.803C46.7957 34.803 47.1518 34.6555 47.4144 34.393C47.6769 34.1304 47.8244 33.7743 47.8244 33.403C47.8134 30.4484 46.6352 27.6178 44.5466 25.5278C42.458 23.4379 39.6281 22.2579 36.6734 22.245C36.3021 22.245 35.946 22.3925 35.6835 22.6551C35.4209 22.9176 35.2734 23.2737 35.2734 23.645Z"
                                            fill="#7444FD" />
                                    </svg>
                                </div>
                                <h3 class="title">
                                    <a href="tel:34534534543"> Hot: +208-666-0112 </a>
                                </h3>

                                <p class="text">Message us for support, we will wait for it</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Form Section S T A R T -->
    <section class="contact-form-section section-padding pt-0 fix">
        <div class="container">
            <div class="contact-form-wrapper style1">
                <div class="row gy-5 gx-60">
                    <div class="col-xl-6">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57559.095682562875!2d88.60522403504652!3d25.6234028155105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb529bc7fc909b%3A0xd8f861ed9baf24de!2sDinajpur!5e0!3m2!1sen!2sbd!4v1729067103339!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form style1">
                            <h2 class="contact-title">
                                Ready to Get Started?
                            </h2>
                            <p class="desc">Have any question? Shoot us an email.</p>

                            <form action="contact.php" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <span>Your name*</span>
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <span>Your Email*</span>
                                            <input type="text" name="email2" id="email2" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <span>Write Message*</span>
                                            <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                        <button type="submit" class="theme-btn">
                                            Send Message <i class="fa-solid fa-arrow-right-long ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
