<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
  

</head>
<body <?php body_class(); ?>>
  <svg style="display: none;">
    <symbol id="prev-line" width="66" height="20" viewBox="0 0 66 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M1.11612 9.11612C0.62796 9.60428 0.62796 10.3957 1.11612 10.8839L9.07107 18.8388C9.55922 19.327 10.3507 19.327 10.8388 18.8388C11.327 18.3507 11.327 17.5592 10.8388 17.0711L3.76777 10L10.8388 2.92894C11.327 2.44078 11.327 1.64933 10.8388 1.16117C10.3507 0.673015 9.55922 0.673015 9.07107 1.16117L1.11612 9.11612ZM66 8.75L2 8.75001L2 11.25L66 11.25L66 8.75Z"/>
    </symbol>
    <symbol id="next-line" width="66" height="20" viewBox="0 0 66 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M64.8839 10.8839C65.372 10.3957 65.372 9.60427 64.8839 9.11612L56.9289 1.16117C56.4408 0.67301 55.6493 0.67301 55.1612 1.16117C54.673 1.64932 54.673 2.44078 55.1612 2.92893L62.2322 10L55.1612 17.0711C54.673 17.5592 54.673 18.3507 55.1612 18.8388C55.6493 19.327 56.4408 19.327 56.9289 18.8388L64.8839 10.8839ZM-3.14164e-09 11.25L64 11.25L64 8.75L3.14164e-09 8.75L-3.14164e-09 11.25Z"/>
    </symbol>
    <symbol id="bnr-left-arrow" width="16" height="50" viewBox="0 0 16 50" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5901 0.823764C15.0337 1.04656 15.3708 1.43617 15.5276 1.90716C15.6843 2.37814 15.6479 2.89207 15.4263 3.33626L4.60009 25L15.4301 46.66C15.5427 46.8804 15.6105 47.1208 15.6297 47.3675C15.6489 47.6142 15.6191 47.8623 15.5419 48.0974C15.4648 48.3326 15.3419 48.5501 15.1803 48.7375C15.0187 48.9249 14.8216 49.0784 14.6004 49.1893C14.3791 49.3002 14.1382 49.3661 13.8913 49.3834C13.6445 49.4007 13.3966 49.3689 13.1621 49.29C12.9276 49.2111 12.711 49.0865 12.5249 48.9234C12.3388 48.7604 12.1867 48.5621 12.0776 48.34L0.827594 25.84C0.696938 25.5793 0.628906 25.2917 0.628906 25C0.628906 24.7084 0.696938 24.4207 0.827594 24.16L12.0776 1.66001C12.3004 1.21643 12.69 0.879303 13.161 0.722542C13.632 0.565781 14.1459 0.602182 14.5901 0.823764Z" fill-opacity="1"/>
    </symbol>
    <symbol id="bnr-right-arrow" width="16" height="50" viewBox="0 0 16 50" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40991 49.1762C0.966326 48.9534 0.629196 48.5638 0.472435 48.0928C0.315673 47.6219 0.352075 47.1079 0.573658 46.6637L11.3999 25L0.569902 3.33999C0.45733 3.11963 0.389492 2.87916 0.370296 2.63246C0.3511 2.38575 0.380927 2.13769 0.458057 1.90257C0.535188 1.66744 0.658098 1.44991 0.819698 1.26252C0.981298 1.07512 1.17839 0.921567 1.39962 0.810708C1.62085 0.699846 1.86183 0.63387 2.10868 0.616586C2.35552 0.599302 2.60335 0.631051 2.83787 0.71C3.07239 0.788949 3.28896 0.913537 3.4751 1.07658C3.66123 1.23963 3.81326 1.43791 3.9224 1.65999L15.1724 24.16C15.3031 24.4207 15.3711 24.7083 15.3711 25C15.3711 25.2916 15.3031 25.5793 15.1724 25.84L3.92241 48.34C3.69961 48.7836 3.31 49.1207 2.83901 49.2775C2.36802 49.4342 1.8541 49.3978 1.40991 49.1762Z" fill-opacity="1"/>
    </symbol>
    <symbol id="ftr-massage-icon"width="24" height="22" viewBox="0 0 24 22" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.0001 0.790039C5.37193 0.790039 0.00131835 5.1541 0.00131835 10.54C0.00131835 12.7727 0.9346 14.8174 2.48147 16.4557C1.78397 18.3072 0.331318 19.8719 0.307881 19.8893C-0.00266603 20.2174 -0.0846973 20.6979 0.091084 21.108C0.272772 21.5182 0.674115 21.79 1.12505 21.79C4.00787 21.79 6.23912 20.583 7.64537 19.6221C8.95787 20.0463 10.4672 20.29 12.0001 20.29C18.6282 20.29 23.9579 15.9246 23.9579 10.54C23.9579 5.15551 18.6282 0.790039 12.0001 0.790039ZM12.0047 18.04C10.7508 18.04 9.51474 17.8467 8.33068 17.4719L7.26427 17.1379L6.35021 17.7825C5.68224 18.2568 4.76208 18.7846 3.6549 19.1418C4.0006 18.5737 4.32849 17.9348 4.58677 17.2551L5.08458 15.9426L4.11802 14.9175C3.27287 14.0135 2.25333 12.5182 2.25333 10.54C2.25333 6.40332 6.62443 3.04004 12.0033 3.04004C17.3822 3.04004 21.7533 6.40332 21.7533 10.54C21.7533 14.6768 17.3813 18.04 12.0047 18.04Z" fill="#EACC95"/>
    </symbol>
    <symbol id="ftr-review-icon"width="23" height="25" viewBox="0 0 23 25" xmlns="http://www.w3.org/2000/svg">
      <path d="M21.8564 13.7286C22.2675 13.0325 22.5 12.29 22.5 11.3924C22.5 9.32918 20.7554 7.38082 18.4772 7.38082H16.7672C16.9978 6.78035 17.182 6.06223 17.182 5.19926C17.182 1.78704 15.4153 0.290039 12.7162 0.290039C9.82842 0.290039 9.99314 4.74002 9.3525 5.38066C8.28623 6.44693 7.0268 8.49537 6.12937 9.29004H1.5C0.671578 9.29004 0 9.96162 0 10.79V22.04C0 22.8685 0.671578 23.54 1.5 23.54H4.5C5.19811 23.54 5.78475 23.0631 5.95209 22.4174C8.03845 22.4643 9.47053 24.2896 14.2866 24.2896C14.625 24.2896 15 24.29 15.3281 24.29C18.943 24.29 20.5775 22.4421 20.6222 19.8214C21.2465 18.9578 21.5737 17.8001 21.435 16.6813C21.8969 15.8164 22.0755 14.7902 21.8564 13.7286ZM18.9619 16.2519C19.5506 17.2424 19.0209 18.568 18.3084 18.9505C18.6694 21.2371 17.4831 22.0396 15.8184 22.0396H14.0456C10.6875 22.0396 8.51302 20.2668 6 20.2668V11.54H6.51188C7.84125 11.54 9.69844 8.21707 10.9434 6.9716C12.2728 5.64223 11.8298 3.42645 12.7162 2.54004C14.932 2.54004 14.932 4.08598 14.932 5.19926C14.932 7.03535 13.6027 7.85801 13.6027 9.63082H18.4772C19.4667 9.63082 20.2458 10.5172 20.25 11.4036C20.2542 12.2896 19.6491 13.176 19.2061 13.176C19.8384 13.8582 19.9735 15.2964 18.9619 16.2519ZM4.125 20.54C4.125 21.1614 3.62133 21.665 3 21.665C2.37867 21.665 1.875 21.1614 1.875 20.54C1.875 19.9187 2.37867 19.415 3 19.415C3.62133 19.415 4.125 19.9187 4.125 20.54Z" fill="#EACC95"/>
    </symbol>
    <symbol id="facebook-icon" width="10" height="18" viewBox="0 0 10 18" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.39703 17.9972V9.80117H9.16203L9.57303 6.59217H6.39703V4.54817C6.39703 3.62217 6.65503 2.98817 7.98403 2.98817H9.66803V0.127169C8.84867 0.0393602 8.02508 -0.00303802 7.20103 0.000169166C4.75703 0.000169166 3.07903 1.49217 3.07903 4.23117V6.58617H0.332031V9.79517H3.08503V17.9972H6.39703Z" />
    </symbol>
    <symbol id="twitter-icon"width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M23.643 2.93708C22.808 3.30708 21.911 3.55708 20.968 3.67008C21.941 3.08787 22.669 2.17154 23.016 1.09208C22.1019 1.63507 21.1014 2.01727 20.058 2.22208C19.3564 1.47294 18.4271 0.976403 17.4143 0.809551C16.4016 0.642699 15.3621 0.814868 14.4572 1.29933C13.5524 1.78379 12.8328 2.55344 12.4102 3.48878C11.9875 4.42412 11.8855 5.47283 12.12 6.47208C10.2677 6.37907 8.45564 5.89763 6.80144 5.05898C5.14723 4.22034 3.68785 3.04324 2.51801 1.60408C2.11801 2.29408 1.88801 3.09408 1.88801 3.94608C1.88757 4.71307 2.07644 5.46832 2.43789 6.14481C2.79934 6.8213 3.32217 7.39812 3.96001 7.82408C3.22029 7.80054 2.49688 7.60066 1.85001 7.24108V7.30108C1.84994 8.37682 2.22204 9.41945 2.90319 10.2521C3.58434 11.0847 4.53258 11.656 5.58701 11.8691C4.9008 12.0548 4.18135 12.0821 3.48301 11.9491C3.78051 12.8747 4.36001 13.6841 5.14038 14.264C5.92075 14.8439 6.86293 15.1653 7.83501 15.1831C6.18484 16.4785 4.1469 17.1812 2.04901 17.1781C1.67739 17.1782 1.30609 17.1565 0.937012 17.1131C3.06649 18.4823 5.54535 19.2089 8.07701 19.2061C16.647 19.2061 21.332 12.1081 21.332 5.95208C21.332 5.75208 21.327 5.55008 21.318 5.35008C22.2293 4.69105 23.0159 3.87497 23.641 2.94008L23.643 2.93708Z"/>
    </symbol>
    <symbol id="instagram-icon"width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.465 0.066C7.638 0.012 8.012 0 11 0C13.988 0 14.362 0.013 15.534 0.066C16.706 0.119 17.506 0.306 18.206 0.577C18.939 0.854 19.604 1.287 20.154 1.847C20.714 2.396 21.146 3.06 21.422 3.794C21.694 4.494 21.88 5.294 21.934 6.464C21.988 7.639 22 8.013 22 11C22 13.988 21.987 14.362 21.934 15.535C21.881 16.705 21.694 17.505 21.422 18.205C21.146 18.9391 20.7133 19.6042 20.154 20.154C19.604 20.714 18.939 21.146 18.206 21.422C17.506 21.694 16.706 21.88 15.536 21.934C14.362 21.988 13.988 22 11 22C8.012 22 7.638 21.987 6.465 21.934C5.295 21.881 4.495 21.694 3.795 21.422C3.06092 21.146 2.39582 20.7133 1.846 20.154C1.28638 19.6047 0.853315 18.9399 0.577 18.206C0.306 17.506 0.12 16.706 0.066 15.536C0.012 14.361 0 13.987 0 11C0 8.012 0.013 7.638 0.066 6.466C0.119 5.294 0.306 4.494 0.577 3.794C0.853723 3.06008 1.28712 2.39531 1.847 1.846C2.39604 1.2865 3.06047 0.853443 3.794 0.577C4.494 0.306 5.294 0.12 6.464 0.066H6.465ZM15.445 2.046C14.285 1.993 13.937 1.982 11 1.982C8.063 1.982 7.715 1.993 6.555 2.046C5.482 2.095 4.9 2.274 4.512 2.425C3.999 2.625 3.632 2.862 3.247 3.247C2.88205 3.60205 2.60118 4.03428 2.425 4.512C2.274 4.9 2.095 5.482 2.046 6.555C1.993 7.715 1.982 8.063 1.982 11C1.982 13.937 1.993 14.285 2.046 15.445C2.095 16.518 2.274 17.1 2.425 17.488C2.601 17.965 2.882 18.398 3.247 18.753C3.602 19.118 4.035 19.399 4.512 19.575C4.9 19.726 5.482 19.905 6.555 19.954C7.715 20.007 8.062 20.018 11 20.018C13.938 20.018 14.285 20.007 15.445 19.954C16.518 19.905 17.1 19.726 17.488 19.575C18.001 19.375 18.368 19.138 18.753 18.753C19.118 18.398 19.399 17.965 19.575 17.488C19.726 17.1 19.905 16.518 19.954 15.445C20.007 14.285 20.018 13.937 20.018 11C20.018 8.063 20.007 7.715 19.954 6.555C19.905 5.482 19.726 4.9 19.575 4.512C19.375 3.999 19.138 3.632 18.753 3.247C18.3979 2.88207 17.9657 2.60121 17.488 2.425C17.1 2.274 16.518 2.095 15.445 2.046ZM9.595 14.391C10.3797 14.7176 11.2534 14.7617 12.0669 14.5157C12.8805 14.2697 13.5834 13.7489 14.0556 13.0422C14.5278 12.3356 14.7401 11.4869 14.656 10.6411C14.572 9.79534 14.197 9.00497 13.595 8.405C13.2112 8.02148 12.7472 7.72781 12.2363 7.54515C11.7255 7.36248 11.1804 7.29536 10.6405 7.34862C10.1006 7.40187 9.57915 7.57418 9.1138 7.85313C8.64845 8.13208 8.25074 8.51074 7.9493 8.96185C7.64786 9.41296 7.45019 9.92529 7.37052 10.462C7.29084 10.9986 7.33115 11.5463 7.48854 12.0655C7.64593 12.5847 7.91648 13.0626 8.28072 13.4647C8.64496 13.8668 9.09382 14.1832 9.595 14.391ZM7.002 7.002C7.52702 6.47697 8.15032 6.0605 8.8363 5.77636C9.52228 5.49222 10.2575 5.34597 11 5.34597C11.7425 5.34597 12.4777 5.49222 13.1637 5.77636C13.8497 6.0605 14.473 6.47697 14.998 7.002C15.523 7.52702 15.9395 8.15032 16.2236 8.8363C16.5078 9.52228 16.654 10.2575 16.654 11C16.654 11.7425 16.5078 12.4777 16.2236 13.1637C15.9395 13.8497 15.523 14.473 14.998 14.998C13.9377 16.0583 12.4995 16.654 11 16.654C9.50046 16.654 8.06234 16.0583 7.002 14.998C5.94166 13.9377 5.34597 12.4995 5.34597 11C5.34597 9.50046 5.94166 8.06234 7.002 7.002ZM17.908 6.188C18.0381 6.06527 18.1423 5.91768 18.2143 5.75397C18.2863 5.59027 18.3248 5.41377 18.3274 5.23493C18.33 5.05609 18.2967 4.87855 18.2295 4.71281C18.1622 4.54707 18.0624 4.39651 17.936 4.27004C17.8095 4.14357 17.6589 4.04376 17.4932 3.97652C17.3275 3.90928 17.1499 3.87598 16.9711 3.87858C16.7922 3.88119 16.6157 3.91965 16.452 3.9917C16.2883 4.06374 16.1407 4.1679 16.018 4.298C15.7793 4.55103 15.6486 4.88712 15.6537 5.23493C15.6588 5.58274 15.7992 5.91488 16.0452 6.16084C16.2911 6.40681 16.6233 6.54723 16.9711 6.5523C17.3189 6.55737 17.655 6.42669 17.908 6.188Z" />
    </symbol>
    <symbol id="likedin-icon" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path  d="M7.429 6.969H11.143V8.819C11.678 7.755 13.05 6.799 15.111 6.799C19.062 6.799 20 8.917 20 12.803V20H16V13.688C16 11.475 15.465 10.227 14.103 10.227C12.214 10.227 11.429 11.572 11.429 13.687V20H7.429V6.969ZM0.57 19.83H4.57V6.799H0.57V19.83ZM5.143 2.55C5.14315 2.88528 5.07666 3.21724 4.94739 3.52659C4.81812 3.83594 4.62865 4.11651 4.39 4.352C3.9064 4.83262 3.25181 5.10165 2.57 5.1C1.88939 5.09954 1.23631 4.8312 0.752 4.353C0.514211 4.11671 0.325386 3.83582 0.196344 3.52643C0.0673015 3.21704 0.000579132 2.88522 0 2.55C0 1.873 0.27 1.225 0.753 0.747C1.23689 0.268158 1.89024 -0.000299211 2.571 2.50265e-07C3.253 2.50265e-07 3.907 0.269 4.39 0.747C4.872 1.225 5.143 1.873 5.143 2.55Z"/>
    </symbol>
    <symbol id="hdr-instagram-icon"  width="16" height="15" viewBox="0 0 16 15"  xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M4.9765 0.210666C5.7585 0.174666 6.00784 0.166666 7.99984 0.166666C9.99184 0.166666 10.2412 0.175333 11.0225 0.210666C11.8038 0.245999 12.3372 0.370666 12.8038 0.551333C13.2925 0.735999 13.7358 1.02467 14.1025 1.398C14.4758 1.764 14.7638 2.20667 14.9478 2.696C15.1292 3.16267 15.2532 3.696 15.2892 4.476C15.3252 5.25933 15.3332 5.50867 15.3332 7.5C15.3332 9.492 15.3245 9.74133 15.2892 10.5233C15.2538 11.3033 15.1292 11.8367 14.9478 12.3033C14.7638 12.7927 14.4754 13.2361 14.1025 13.6027C13.7358 13.976 13.2925 14.264 12.8038 14.448C12.3372 14.6293 11.8038 14.7533 11.0238 14.7893C10.2412 14.8253 9.99184 14.8333 7.99984 14.8333C6.00784 14.8333 5.7585 14.8247 4.9765 14.7893C4.1965 14.754 3.66317 14.6293 3.1965 14.448C2.70712 14.264 2.26372 13.9755 1.89717 13.6027C1.52409 13.2364 1.23538 12.7933 1.05117 12.304C0.870504 11.8373 0.746504 11.304 0.710504 10.524C0.674504 9.74067 0.666504 9.49133 0.666504 7.5C0.666504 5.508 0.675171 5.25867 0.710504 4.47733C0.745837 3.696 0.870504 3.16267 1.05117 2.696C1.23565 2.20672 1.52458 1.76354 1.89784 1.39733C2.26386 1.02433 2.70682 0.735628 3.19584 0.551333C3.6625 0.370666 4.19584 0.246666 4.97584 0.210666H4.9765ZM10.9632 1.53067C10.1898 1.49533 9.95784 1.488 7.99984 1.488C6.04184 1.488 5.80984 1.49533 5.0365 1.53067C4.32117 1.56333 3.93317 1.68267 3.6745 1.78333C3.3325 1.91667 3.08784 2.07467 2.83117 2.33133C2.58787 2.56803 2.40062 2.85619 2.28317 3.17467C2.1825 3.43333 2.06317 3.82133 2.0305 4.53667C1.99517 5.31 1.98784 5.542 1.98784 7.5C1.98784 9.458 1.99517 9.69 2.0305 10.4633C2.06317 11.1787 2.1825 11.5667 2.28317 11.8253C2.4005 12.1433 2.58784 12.432 2.83117 12.6687C3.06784 12.912 3.3565 13.0993 3.6745 13.2167C3.93317 13.3173 4.32117 13.4367 5.0365 13.4693C5.80984 13.5047 6.04117 13.512 7.99984 13.512C9.9585 13.512 10.1898 13.5047 10.9632 13.4693C11.6785 13.4367 12.0665 13.3173 12.3252 13.2167C12.6672 13.0833 12.9118 12.9253 13.1685 12.6687C13.4118 12.432 13.5992 12.1433 13.7165 11.8253C13.8172 11.5667 13.9365 11.1787 13.9692 10.4633C14.0045 9.69 14.0118 9.458 14.0118 7.5C14.0118 5.542 14.0045 5.31 13.9692 4.53667C13.9365 3.82133 13.8172 3.43333 13.7165 3.17467C13.5832 2.83267 13.4252 2.588 13.1685 2.33133C12.9318 2.08805 12.6436 1.90081 12.3252 1.78333C12.0665 1.68267 11.6785 1.56333 10.9632 1.53067ZM7.06317 9.76067C7.58628 9.97842 8.16876 10.0078 8.71112 9.84381C9.25349 9.67982 9.7221 9.33261 10.0369 8.8615C10.3517 8.39038 10.4932 7.82458 10.4372 7.26074C10.3812 6.69689 10.1312 6.16998 9.72984 5.77C9.474 5.51432 9.16465 5.31854 8.82406 5.19676C8.48347 5.07499 8.12012 5.03024 7.76017 5.06574C7.40021 5.10125 7.05261 5.21612 6.74237 5.40209C6.43214 5.58806 6.167 5.8405 5.96604 6.14123C5.76508 6.44197 5.6333 6.78353 5.58018 7.14131C5.52707 7.49909 5.55394 7.86419 5.65886 8.21034C5.76379 8.55649 5.94416 8.87507 6.18698 9.14315C6.42981 9.41122 6.72905 9.62212 7.06317 9.76067ZM5.3345 4.83467C5.68452 4.48465 6.10005 4.207 6.55737 4.01757C7.01469 3.82815 7.50484 3.73065 7.99984 3.73065C8.49484 3.73065 8.98499 3.82815 9.44231 4.01757C9.89962 4.207 10.3152 4.48465 10.6652 4.83467C11.0152 5.18468 11.2928 5.60021 11.4823 6.05753C11.6717 6.51485 11.7692 7.005 11.7692 7.5C11.7692 7.995 11.6717 8.48515 11.4823 8.94247C11.2928 9.39979 11.0152 9.81532 10.6652 10.1653C9.95828 10.8722 8.99953 11.2694 7.99984 11.2694C7.00014 11.2694 6.04139 10.8722 5.3345 10.1653C4.62761 9.45844 4.23049 8.49969 4.23049 7.5C4.23049 6.50031 4.62761 5.54156 5.3345 4.83467ZM12.6052 4.292C12.6919 4.21018 12.7613 4.11179 12.8094 4.00265C12.8574 3.89351 12.883 3.77585 12.8848 3.65662C12.8865 3.53739 12.8643 3.41903 12.8195 3.30854C12.7747 3.19805 12.7081 3.09767 12.6238 3.01336C12.5395 2.92904 12.4391 2.8625 12.3286 2.81768C12.2181 2.77285 12.0998 2.75065 11.9806 2.75239C11.8613 2.75413 11.7437 2.77977 11.6345 2.8278C11.5254 2.87583 11.427 2.94526 11.3452 3.032C11.186 3.20069 11.0989 3.42475 11.1023 3.65662C11.1057 3.88849 11.1993 4.10992 11.3633 4.27389C11.5273 4.43787 11.7487 4.53149 11.9806 4.53487C12.2124 4.53825 12.4365 4.45113 12.6052 4.292Z" />
    </symbol>
    <symbol id="hdr-twitter-icon" width="16" height="13" viewBox="0 0 16 13" xmlns="http://www.w3.org/2000/svg">
      <path d="M15.7618 1.79133C15.2052 2.038 14.6072 2.20467 13.9785 2.28C14.6272 1.89186 15.1125 1.28098 15.3438 0.561333C14.7344 0.923325 14.0674 1.17813 13.3718 1.31467C12.9041 0.815243 12.2846 0.484217 11.6094 0.372982C10.9342 0.261747 10.2412 0.376527 9.638 0.699501C9.03476 1.02248 8.55503 1.53557 8.27328 2.15913C7.99153 2.7827 7.92354 3.48183 8.07984 4.148C6.84497 4.086 5.63693 3.76503 4.53413 3.20594C3.43133 2.64684 2.45841 1.86211 1.67851 0.902666C1.41184 1.36267 1.25851 1.896 1.25851 2.464C1.25821 2.97533 1.38413 3.47883 1.6251 3.92982C1.86606 4.38081 2.21462 4.76536 2.63985 5.04933C2.1467 5.03364 1.66443 4.90039 1.23318 4.66067V4.70066C1.23313 5.41783 1.4812 6.11292 1.9353 6.668C2.3894 7.22307 3.02156 7.60395 3.72451 7.746C3.26703 7.86981 2.7874 7.88805 2.32185 7.79933C2.52018 8.41641 2.90651 8.95602 3.42676 9.34262C3.947 9.72922 4.57512 9.94345 5.22318 9.95533C4.12307 10.8189 2.76444 11.2874 1.36585 11.2853C1.1181 11.2854 0.870563 11.2709 0.624512 11.242C2.04416 12.1548 3.69674 12.6392 5.38451 12.6373C11.0978 12.6373 14.2212 7.90533 14.2212 3.80133C14.2212 3.668 14.2178 3.53333 14.2118 3.4C14.8194 2.96065 15.3438 2.4166 15.7605 1.79333L15.7618 1.79133Z"/>
    </symbol>
    <symbol id="hdr-facebook-icon" width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
      <path d="M4.93152 12.498V7.034H6.77485L7.04885 4.89467H4.93152V3.532C4.93152 2.91467 5.10352 2.492 5.98952 2.492H7.11218V0.584667C6.56594 0.526128 6.01688 0.497862 5.46752 0.5C3.83818 0.5 2.71952 1.49467 2.71952 3.32067V4.89067H0.888184V7.03H2.72352V12.498H4.93152Z"/>
    </symbol>
    <symbol id="revw-right-arrow" width="11" height="34" viewBox="0 0 11 34" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.9401 33.1176C0.64438 32.969 0.419627 32.7093 0.315119 32.3953C0.210611 32.0813 0.234879 31.7387 0.382601 31.4426L7.6001 17.0001L0.380098 2.56007C0.30505 2.41317 0.259824 2.25286 0.247027 2.08839C0.234229 1.92392 0.254114 1.75854 0.305534 1.60179C0.356955 1.44504 0.438894 1.30002 0.546628 1.17509C0.654362 1.05016 0.785758 0.947793 0.933243 0.873883C1.08073 0.799977 1.24138 0.755994 1.40595 0.744469C1.57051 0.732949 1.73573 0.754113 1.89207 0.806744C2.04842 0.85938 2.1928 0.942437 2.31689 1.05114C2.44099 1.15983 2.54233 1.29202 2.6151 1.44007L10.1151 16.4401C10.2022 16.6139 10.2476 16.8056 10.2476 17.0001C10.2476 17.1945 10.2022 17.3862 10.1151 17.5601L2.6151 32.5601C2.46657 32.8558 2.20683 33.0805 1.89284 33.1851C1.57885 33.2896 1.23623 33.2653 0.9401 33.1176Z"/>
    </symbol>
    <symbol id="revw-left-arrow" width="11" height="34" viewBox="0 0 11 34" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0599 0.882428C10.3556 1.03096 10.5804 1.2907 10.6849 1.60469C10.7894 1.91868 10.7651 2.2613 10.6174 2.55743L3.3999 16.9999L10.6199 31.4399C10.6949 31.5868 10.7402 31.7471 10.753 31.9116C10.7658 32.0761 10.7459 32.2415 10.6945 32.3982C10.643 32.555 10.5611 32.7 10.4534 32.8249C10.3456 32.9498 10.2142 33.0522 10.0668 33.1261C9.91927 33.2 9.75861 33.244 9.59405 33.2555C9.42948 33.2671 9.26427 33.2459 9.10792 33.1933C8.95158 33.1406 8.8072 33.0576 8.6831 32.9489C8.55901 32.8402 8.45766 32.708 8.3849 32.5599L0.8849 17.5599C0.797796 17.3861 0.752441 17.1944 0.752441 16.9999C0.752441 16.8055 0.797796 16.6138 0.8849 16.4399L8.3849 1.43993C8.53343 1.14421 8.79317 0.919454 9.10716 0.814947C9.42115 0.710439 9.76377 0.734706 10.0599 0.882428Z"/>
    </symbol>
    <symbol id="modal-close-icon" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.6589 1.15925C17.8656 0.940764 18.1139 0.765924 18.3893 0.645065C18.6647 0.524207 18.9615 0.459783 19.2622 0.455601C19.5629 0.451419 19.8614 0.507564 20.1401 0.620718C20.4187 0.733872 20.6719 0.901738 20.8845 1.11439C21.0972 1.32705 21.265 1.58018 21.3782 1.85882C21.4913 2.13746 21.5475 2.43596 21.5433 2.73667C21.5391 3.03738 21.4747 3.3342 21.3538 3.60959C21.233 3.88498 21.0581 4.13334 20.8397 4.34L14.2472 10.9325C14.2384 10.9412 14.2315 10.9516 14.2268 10.9629C14.222 10.9743 14.2196 10.9865 14.2196 10.9989C14.2196 11.0112 14.222 11.0234 14.2268 11.0348C14.2315 11.0462 14.2384 11.0565 14.2472 11.0653L20.8397 17.6578C21.0514 17.866 21.2198 18.1142 21.3352 18.3879C21.4506 18.6616 21.5106 18.9554 21.5118 19.2524C21.5131 19.5494 21.4555 19.8437 21.3424 20.1184C21.2294 20.393 21.063 20.6426 20.853 20.8526C20.643 21.0627 20.3935 21.2291 20.1189 21.3422C19.8443 21.4553 19.55 21.513 19.253 21.5118C18.956 21.5106 18.6621 21.4507 18.3884 21.3354C18.1147 21.2201 17.8665 21.0517 17.6582 20.84L11.0657 14.2475C11.0569 14.2388 11.0466 14.2318 11.0352 14.2271C11.0238 14.2224 11.0116 14.22 10.9993 14.22C10.9869 14.22 10.9747 14.2224 10.9633 14.2271C10.952 14.2318 10.9416 14.2388 10.9329 14.2475L4.34041 20.84C4.13213 21.0518 3.88398 21.2202 3.61029 21.3355C3.33659 21.4509 3.04277 21.5109 2.74575 21.5122C2.44874 21.5134 2.15442 21.4559 1.87977 21.3428C1.60512 21.2297 1.35557 21.0634 1.14553 20.8534C0.935479 20.6434 0.769088 20.3939 0.655952 20.1193C0.542815 19.8446 0.485171 19.5503 0.486346 19.2533C0.48752 18.9563 0.547489 18.6625 0.662793 18.3887C0.778098 18.115 0.946456 17.8668 1.15816 17.6585L7.75066 11.066C7.75939 11.0573 7.76631 11.0469 7.77104 11.0356C7.77577 11.0242 7.7782 11.012 7.7782 10.9996C7.7782 10.9873 7.77577 10.9751 7.77104 10.9637C7.76631 10.9523 7.75939 10.942 7.75066 10.9333L1.15816 4.34075C0.741826 3.91768 0.509534 3.34724 0.511881 2.75368C0.514228 2.16013 0.751022 1.59154 1.17069 1.17178C1.59035 0.752014 2.15888 0.515085 2.75244 0.512599C3.346 0.510112 3.91649 0.742269 4.33966 1.1585L10.9322 7.751C10.9409 7.75973 10.9512 7.76666 10.9626 7.77138C10.974 7.77611 10.9862 7.77854 10.9985 7.77854C11.0109 7.77854 11.0231 7.77611 11.0345 7.77138C11.0459 7.76666 11.0562 7.75973 11.0649 7.751L17.6574 1.1585L17.6589 1.15925Z"/>
    </symbol>
    <symbol id="faq-list-icon-svg" width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.3335 1.00016L7.00016 6.3335L1.66683 1.00016" stroke="#29467D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="faq-list-icon-active-svg" width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg">
      <path d="M1.6665 6.99984L6.99984 1.6665L12.3332 6.99984" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>

  </svg>  
  <div class="page-body-cntlr">
    <div class="bdoverlay"></div>
    <div class="main-header-gap"></div>

    <?php 
    $logoID = get_field('logo', 'options');
    $link = get_field('link', 'options');
    $link_02 = get_field('link_02', 'options');
    $facebook = get_field('facebook', 'options');
    $twitter = get_field('twitter', 'options');
    $instagram = get_field('instagram', 'options');
    ?>
    <header class="header">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="topbar-cntlr">
                <div class="topbar-left hide-md">
                  <div class="topbar-menu">
                    <?php 
                    $Topbarmenu = array( 
                      'theme_location' => 'cbv_Topbar_menu', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                    wp_nav_menu( $Topbarmenu ); 
                    ?>
                  </div>
                </div>
                <div class="topbar-right-cntlr hide-md">
                  <div class="topbar-right">
                    <?php if (is_array($link) && !empty($link['url'])): ?>
                    <div class="book-appointment-btn">
                      <?php printf('<a href="%s">%s</a>',$link['url'],$link['title']); ?>
                    </div>
                    <?php endif; ?>
                    <div class="hdr-socials">
                      <ul class="reset-list">
                        <?php if(!empty($facebook)): ?>
                        <li>
                          <a target="_blank" href="<?php echo $facebook; ?>">
                            <i>
                              <svg class="hdr-facebook-icon" width="8" height="13" viewBox="0 0 8 13" fill="#fff">
                                <use xlink:href="#hdr-facebook-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </li>
                        <?php endif; if(!empty($twitter)): ?>
                        <li>
                          <a target="_blank" href="<?php echo $twitter; ?>">
                            <i>
                              <svg class="hdr-twitter-icon" width="16" height="13" viewBox="0 0 16 13" fill="#fff">
                                <use xlink:href="#hdr-twitter-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </li>
                        <?php endif; if(!empty($instagram)): ?>
                        <li>
                          <a target="_blank" href="<?php echo $instagram; ?>">
                            <i>
                              <svg class="hdr-instagram-icon" width="16" height="15" viewBox="0 0 16 15" fill="#fff">
                                <use xlink:href="#hdr-instagram-icon"></use> 
                              </svg>
                            </i>
                          </a>
                        </li>
                        <?php endif; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="mobile-buttons-cntlr show-md">
                  <div class="mobile-buttons">
                    <div class="mobile-btn-col mobile-btn-col-01">
                      <a href="#">request a callback</a>
                    </div>
                    <div class="mobile-btn-col mobile-btn-col-02">
                      <a href="#">Book Online</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-inr clearfix">
                <div class="hdr-lft">
                  <?php if( !empty($logoID) ): ?>
                    <div class="logo">
                      <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo cbv_get_image_tag($logoID); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="hdr-rgt"> 
                  <div class="hdr-menu hide-md">
                    <nav class="main-nav">
                      <?php 
                      $Mainmenu = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                      wp_nav_menu( $Mainmenu ); 
                      ?>
                    </nav>
                  </div>
                  <div class="hamburgar-cntlr show-md">
                    <div class="hamburger-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="xs-mobile-menu">
      <div class="xs-pop-up-menu-inr">
        <div class="xs-pop-up-menu-top">
          <?php if( !empty($logoID) ): ?>
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo cbv_get_image_tag($logoID); ?>
              </a>
            </div>
          <?php endif; ?>
          <div class="hamburgar-cntlr">
            <div class="hamburger-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div class="xs-pop-menu-con">
          <div class="xs-menu">
            <nav class="main-nav">
              <?php 
              $Mainmenu = array( 
                'theme_location' => 'cbv_main_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
              wp_nav_menu( $Mainmenu ); 
              ?>
            </nav>
          </div>
          <div class="topbar-left show-md">
            <div class="topbar-menu">
              <?php 
              $Topbarmenu = array( 
                'theme_location' => 'cbv_Topbar_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => '',
                'container_class' => ''
              );
              wp_nav_menu( $Topbarmenu ); 
              ?>
            </div>
          </div>
        </div>
        <div class="xs-pop-up-menu-btm">
          <div class="hdr-socials">
            <ul class="reset-list">
              <?php if(!empty($facebook)): ?>
                <li>
                  <a target="_blank" href="<?php echo $facebook; ?>">
                    <i>
                      <svg class="hdr-facebook-icon" width="8" height="13" viewBox="0 0 8 13" fill="#fff">
                        <use xlink:href="#hdr-facebook-icon"></use> 
                      </svg>
                    </i>
                  </a>
                </li>
              <?php endif; if(!empty($twitter)): ?>
              <li>
                <a target="_blank" href="<?php echo $twitter; ?>">
                  <i>
                    <svg class="hdr-twitter-icon" width="16" height="13" viewBox="0 0 16 13" fill="#fff">
                      <use xlink:href="#hdr-twitter-icon"></use> 
                    </svg>
                  </i>
                </a>
              </li>
            <?php endif; if(!empty($instagram)): ?>
            <li>
              <a target="_blank" href="<?php echo $instagram; ?>">
                <i>
                  <svg class="hdr-instagram-icon" width="16" height="15" viewBox="0 0 16 15" fill="#fff">
                    <use xlink:href="#hdr-instagram-icon"></use> 
                  </svg>
                </i>
              </a>
            </li>
          <?php endif; ?>
        </ul>
          </div>
        </div>
      </div>
    </div>