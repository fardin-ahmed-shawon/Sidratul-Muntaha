 <style>
     @charset "utf-8";
     @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800,900');

     /*********************************
2. Body and some general stuff
*********************************/
     body {
         overflow-x: hidden !important;
     }

     ::selection {
         background: #02BD61;
         color: #FFFFFF;
     }

     body {
         font-family: "Poppins", sans-serif !important;

     }

     h1,
     h2,
     h3,
     h4,
     h5,
     h6 {
         font-family: 'Poppins', sans-serif;
         color: #000;
         -webkit-font-smoothing: antialiased;
         -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
         text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
     }

     p {
         font-family: 'Poppins', sans-serif;
         color: #000;
     }

     /* Nav start */
     .header_container {
         position: fixed;
         left: 50%;
         right: auto;
         transform: translateX(-50%);
         border-radius: 0;
         background: rgba(255, 255, 255, 0.8);
         border-bottom: 1px solid #ebebeb;
         box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
         backdrop-filter: blur(8px);
         /* apply the blur */
         -webkit-backdrop-filter: blur(8px);
         /* Safari support */
         z-index: 999;
         /* make sure it stays on top */
         max-width: 1200px;
         width: 90%;
         top: 20px;
         border-radius: 15px;
     }

     .main_nav,
     .search_button {
         margin-top: 0px;
     }

     .main_nav_container {
         margin: 0 auto;
     }

     .main_nav li a {
         background: transparent;
     }

     .menu_nav {
         padding-top: 18px;
     }

     .menu_nav ul li {
         margin-bottom: 20px;
     }

     .menu_nav ul li a {
         font-size: 17px;
         color: #000;
         font-weight: 600;

     }

     .main_nav li a:hover,
     .main_nav li.active a {
         background: #02BD61;
         border-radius: 5px;
     }

     .donate-btn-section {
         margin-left: 30px
     }

     .header_container .donate-btn-section a {
         color: white;
     }

     .header_container .donate-btn-section a:hover {
         color: white;
     }

     .logo_img img {
         object-fit: contain;
         width: 60px;
     }

     .nav-donate-btn {
         display: block;
         padding: 10px 25px;
         background: #05A657;
         font-weight: 500;
         border-radius: 10px;

     }

     .language-toggle {
         display: flex;
         border-radius: 10px;
         overflow: hidden;
         background-color: #e7efeb;
         margin-left: 15px;
     }

     .language-toggle button {
         border: none;
         outline: none;
     }

     .lang-btn {
         border: none;
         outline: none;
         padding: 5px 15px;
         background: transparent;
         font-weight: 600;
         color: #1a1a1a;
         cursor: pointer;
         transition: background 0.3s, color 0.3s;
     }

     .lang-btn.active {

         background-color: #b5e0c5;
         color: #000;
     }

     .language-toggle-mm {
         display: flex;
         border-radius: 10px;
         overflow: hidden;
         background-color: #e7efeb;
         margin-left: 15px;
     }

     .language-toggle-mm button {
         border: none;
         outline: none;
     }

     .language-toggle-mm .lang-btn {
         border: none;
         outline: none;
         padding: 5px 15px;
         background: transparent;
         font-weight: 600;
         color: #1a1a1a;
         cursor: pointer;
         transition: background 0.3s, color 0.3s;
     }

     .lang-btn.active {

         background-color: #b5e0c5;
         color: #000;
     }

     .menu_nav ul li a:hover {
         color: #008E48;
     }

     .hamburger:hover i {
         color: #008E48;
     }

     /* Nav end */
     /* Home page css Start   */
     .parallax-window {
         min-height: 308px;
         background: transparent;
     }

     .index-page .home {
         width: 100%;
         height: 90vh;
     }

     .home_container {
         position: absolute;
         bottom: 132px;
         left: 0;
         width: 100%;
     }

     /* Banner Section start  */

     .button {
         background: #02BD61;
     }

     .button:hover {
         background: #06CC6B;
     }

     .button_arrow {
         background: #05A657;
     }

     .button_arrow:hover {
         background: #06CC6B;
     }

     .button:hover .button_arrow {
         background: #06CC6B;
     }

     .button_arrow i {
         color: #fff;
     }

     .button:hover .button_arrow i {
         color: white;
     }

     .home_slider_nav_container {
         position: absolute;
         left: 15px;
         top: -68px;
         width: 103px;
         height: 51px;
         background: #02BD61;
         z-index: 3;
     }


     .home-background {
         position: relative;
         background-image: url("images/Banner3.jpg");
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         min-height: 90vh;
         display: flex;
         justify-content: center;
         align-items: center;
         text-align: center;
         color: white;
         overflow: hidden;
     }

     /* Overlay */
     .home-background .overlay {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 97%;
         background: rgba(0, 0, 0, 0.6);
         /* darker = more opacity */
         z-index: 1;
     }

     /* Text and buttons on top */
     .home-background .content {
         position: relative;
         z-index: 2;
         padding: 0px;
         padding-right: 196px;
         text-align: left;
     }

     /* Text and buttons on top */
     .home-background .content h1 {
         color: #fff;
         font-size: 65px;
         line-height: 70px;

     }

     .home-background .content p {
         color: #fff;
         font-size: 17px;
         line-height: 28.4px;

     }

     /* Buttons */
     .home-background .btn {
         display: inline-block;
         margin: 10px;
         padding: 12px 28px;
         background: #008E48;
         color: white;
         font-weight: 600;
         border-radius: 10px;
         text-decoration: none;
         transition: background 0.3s;
     }

     .home-background .btn:hover {
         background: #01a855;
     }

     .home-background .btn-outline {
         background: transparent;
         border: 1px solid white;
     }

     .home-background .btn-outline:hover {
         background: white;
         color: #222;
     }

     /* Banner Section end  */

     /* Banner Below start    */
     .featured_title h3 a:hover {
         color: #02BD61;
     }

     .featured_author_name:hover {
         color: #02BD61;
     }

     .featured_author_name a:hover {
         color: #02BD61;
     }

     .featured_content::after {
         background: #06CC6B;
     }

     .featured_text {
         margin-top: 18px;
         line-height: 1.92;
         color: black;
     }

     /* Banner Below end    */


     .courses {
         padding-top: 1px;



     }

     .donate-preview_item .course .course_image img {
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
     }


     .donate-preview_item .course .course_body {
         width: 100%;
         padding-left: 20px;
         padding-right: 32px;
         padding-top: 25px;
         padding-bottom: 25px;
         background: #fff;
         margin-bottom: 20px;
         box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
         margin-top: -2px;
         -webkit-border-bottom-right-radius: 20px;
         -webkit-border-bottom-left-radius: 20px;
         -moz-border-radius-bottomright: 20px;
         -moz-border-radius-bottomleft: 20px;
         border-bottom-right-radius: 20px;
         border-bottom-left-radius: 20px;
         border: 1px solid #ccc;
     }

     .donate-preview_item-btn {
         width: 100%;
         padding: 10px 0;
         border-radius: 8px;
         text-decoration: none;
         color: #fff;
         font-size: 17px;
         font-weight: 600;
         background: #008E48;
         text-align: center;
     }

     .donate-preview_item-btn:hover {
         color: #fff;
         background: #02BD61;
     }

     .donate-form-bg {
         margin-top: -185px;
         padding: 50px;
         background: #E8B65D;
         background-image: url("images/donate bg.svg");
         border-radius: 10px;
         z-index: 10;
         max-width: 981px;

     }

     .section_title h2 {
         font-weight: 600;
         color: black;
     }

     .section_subtitle {
         margin-top: 40px;
         margin-bottom: 20px;
         color: black;
     }

     /* Donation Part Start   */
     .course_search_form>div::after {
         background: #06CC6B;
         width: 95%;
     }

     .course-lable {
         color: #000;
         font-size: 17px;
         font-weight: 600;
     }

     .course-lable span {
         color: red;
         font-weight: 600;
     }

     .course_input {
         position: relative;
         width: 95%;
         height: 50px;
         border: none;
         outline: none;
         background: #f2f1f8;
         padding: 0 22px;
         color: #6C6A74;
         border-radius: 10px;
     }

     .course_input:hover {
         border-radius: 0px;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;

     }

     .course_button {
         background: #02BD61;
         border-radius: 10px;
         margin-top: 34px;
     }

     .course_button:hover {
         background: #02BD61;
     }

     .course_button .button_arrow {
         background: #05A657;
         border-radius: 10px;
     }

     .course_button:hover .button_arrow {
         background: #06CC6B;
     }

     .associatives img {
         width: 15%;
         margin: 0 30px;
     }

     /* Donation Part End   */
     /* about quoting part start   */
     /* about quoting part start   */
     .about-quotes .row {
         display: flex;
         flex-wrap: wrap;
         align-items: stretch;
         /* ensures all columns stretch to the tallest one */
     }

     .about-quotes .col-sm-12,
     .about-quotes .col-md-6,
     .about-quotes .col-lg-4 {
         display: flex;
     }

     .quote-item {

         padding: 30px;
         border-radius: 15px;
         box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
         width: 100%;
         height: 100%;
         /* make each quote item fill the column */
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
     }

     .quote-item h1 {
         font-size: 24px;
         font-weight: 600;
     }

     .quote-item i {
         font-size: 36px;
         color: #E8B65D;
         margin-bottom: 10px;
     }

     .quote-item p {
         font-size: 14px;
         text-align: center;
     }

     .about-quote-btn {
         display: flex;
         justify-content: center;
         align-items: center;
     }

     .about-quote-btn a {
         text-decoration: none;
         color: #fff;
         font-size: 18px;
         font-weight: 600;
         background: #008E48;
         padding: 10px 35px;
         border-radius: 10px;
     }

     .about-quote-btn a:hover {
         background: #02BD61;
         transition: all .3s ease-in-out;

     }

     /* Activities part end   */
     .owl-carousel .owl-item img {

         -webkit-border-top-left-radius: 20px;
         -webkit-border-top-right-radius: 20px;
         -moz-border-radius-topleft: 20px;
         -moz-border-radius-topright: 20px;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
     }

     .course_tag {
         background: #02BD61;
     }

     .course_tag:hover {
         background: #05A657;
     }

     .courses_slider_nav {
         background: #02BD61;
     }

     .courses_slider_prev {
         left: -29px;
         z-index: 20;
         border-radius: 50px;
     }

     .courses_slider_next {
         right: -29px;
         z-index: 20;
         border-radius: 50px;
     }

     .courses_slider_nav:hover {
         background: #06CC6B;
     }

     .home-page .course_body {
         width: 100%;
         padding-left: 34px;
         padding-right: 32px;
         padding-top: 56px;
         padding-bottom: 51px;
         background: #fff;
         margin-bottom: 20px;
         box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
         margin-top: -2px;
         -webkit-border-bottom-right-radius: 20px;
         -webkit-border-bottom-left-radius: 20px;
         -moz-border-radius-bottomright: 20px;
         -moz-border-radius-bottomleft: 20px;
         border-bottom-right-radius: 20px;
         border-bottom-left-radius: 20px;
         border: 1px solid #ccc;
     }

     /* Activities part end   */


     /* why choose us start  */

     .accordion::after {

         background: #02BD61;
     }

     .event_date {

         background: #02BD61;
     }

     .news_post_date {

         color: #02BD61;
     }

     .news_post_title a:hover {
         color: #008E48;
     }

     .event_title a:hover {
         color: #02BD61;
     }

     /* why choose us end  */

     .video_container {
         width: 100%;
         height: 100%;
         background: white;
         box-shadow: 0px;
         border-radius: 20px;

     }

     .video iframe {
         border-radius: 20px;
         border: none;
         outline: none;
         box-shadow: none;
     }

     /* phoots    */

     .photos img {
         width: 100%;
         height: 100%;
         border-radius: 20px;
         object-fit: contain;
     }


     .join-bg {
         background-image: url("images/join bg.png");
         background-repeat: no-repeat;
         background-position: center center;
         padding: 35px 40px;
         border-radius: 20px;

     }

     .join-input {
         width: 40%;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         border: none;
         outline: none;
         padding: 5px 20px;
     }

     .join-btn {
         background: #E8B65D;
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
     }

     .join-btn:hover {
         background: #E8B65D;
     }

     /* Home page css end   */


     /* About Page css Start   */
     .about {
         width: 100%;
         background: #FFFFFF;
         padding-top: 28px;
         padding-bottom: 111px;
     }

     .breadcrumbs ul li {
         color: #02BD61;
     }

     .breadcrumbs ul li a:hover {
         color: #02BD61;
     }

     .tabs {
         width: 100%;
         margin-top: 20px;
         background: #FFFFFF;
     }

     .tab {

         height: 50px;
         background: #008E48;
         font-size: 16px;
         color: #fff;
         font-weight: 600;
         line-height: 50px;
         padding-left: 25px;
         padding-right: 25px;
         text-align: center;
         cursor: pointer;
         margin-left: 2px;
         border-radius: 5px;

     }

     .tabs-rounded {
         border: 1px solid #ccc;
         border-radius: 20px;
         padding: 10px;
     }

     .tab::after {
         position: absolute;
         bottom: -8px;

         background: #000;
     }

     .tab_panels {
         padding-left: 50px;
         padding-right: 2px;
         padding-top: 47px;
         padding-bottom: 32px;
     }

     /* .tab_panels {
         padding-left: 43px;
         padding-right: 10px;
         padding-top: 47px;
         padding-bottom: 32px;
         border: 1px dotted slateblue;
         border-radius: 20px;
     } */

     /* About Page css End   */

     /* Activities Page css start   */
     .course_title h3 a {
         font-size: 18px;
         overflow: hidden;
         text-overflow: ellipsis;
         width: 100%;
         display: block;
         white-space: nowrap;
     }

     .course_title h3 a:hover {
         color: #02BD61;
     }


     .text-elipsis {
         overflow: hidden;
         text-overflow: ellipsis;
         width: 200px;
         display: block;
         white-space: nowrap;
     }

     .text-truncated {
         /* Modern syntax */
         line-clamp: 3;


         /* Legacy WebKit fallback */
         display: -webkit-box;
         -webkit-box-orient: vertical;
         -webkit-line-clamp: 3;

         overflow: hidden;
         text-overflow: ellipsis;
     }

     .course::after {
         background: #02BD61;
     }

     .course_text {
         margin: 18px 0;
     }

     .courses_paginations ul li a:hover,
     .courses_paginations ul li.active a {
         color: #02BD61;
     }

     /* Activities Page css end   */


     /* Gallery Page css start */
     .photos .image-alignment {
         display: flex;
         justify-content: center;
         align-items: center;
         margin-bottom: 20px;

     }

     .photos .image-alignment img {
         height: auto;
         object-fit: contain;
         border-radius: 10px;
     }

     /* Gallery Page css end  */


     /* Contact Page css start  */
     .contact_info_title {
         color: #02BD61;
     }

     .contact_input:hover,
     .contact_input:focus {
         border-bottom: solid 3px #02BD61;
     }

     .contact_button {
         background: #02BD61;
     }

     .contact_button:hover {
         background: #06CC6B;
     }

     .contact_button .button_arrow {
         width: 47px;
         background: #05A657;
     }

     .contact_button:hover .button_arrow {
         width: 47px;
         background: #05A657;
     }

     /* Contact Page css end  */


     /* Notice Page css start  */


     .card_container {
         margin: 165px 0;
         width: 100%;
         border: 1px dotted blanchedalmond;
         box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 8px;
         padding: 2rem;
         display: flex;
         justify-content: space-between;
         border-radius: 25px;
         flex-wrap: wrap;
         cursor: pointer;
     }

     .card_container {
         margin: 50px 0;
         width: 100%;
         border: 1px dotted blanchedalmond;
         box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 8px;
         padding: 2rem;
         display: flex;
         justify-content: space-between;
         border-radius: 25px;
         flex-wrap: wrap;
         cursor: pointer;

     }

     .card_container .date {
         display: flex;
         flex-direction: column;
         column-gap: 10px;
         justify-content: center;
         align-items: center;
     }

     .card_container .notice_text {
         display: flex;
         flex-direction: column;
         column-gap: 10px;
     }

     .card_container .btn {
         display: flex;
         flex-direction: column;
         justify-content: center;
     }

     .card_container .btn button {
         background: #008E48;
         opacity: 0.8;
         color: white;
         font-weight: 600;
         padding: 10px 25px;
         border: 0;
         border-radius: 15px;
     }

     /* Notice Page css end  */



     /* notice details page start  */

     .notice-title {
         font-size: 24px;
         font-weight: 600;
         color: #008E48;
     }

     .notice-btn {
         padding: 10px 20px;
         background: #EEF2F0;
         border: 0;
         border-radius: 15px;
         color: #008E48;
     }

     .notice-features {
         padding: 30px 40px;
         background: #008E48;
         font-weight: 600;
         color: #fff;
         border-radius: 20px;
     }

     .notice-features h1 {
         font-size: 20px;
         font-weight: 600;
         color: #fff;
     }

     .notice-features p {
         color: #fff;
     }

     .description-card {
         background-color: white;
         border-radius: 20px;
         display: flex;
         box-shadow: -2px 6px 9px -1px rgba(0, 0, 0, 0.77);
         -webkit-box-shadow: -2px 6px 9px -1px rgba(0, 0, 0, 0.77);
         -moz-box-shadow: -2px 6px 9px -1px rgba(0, 0, 0, 0.77);

     }

     /* notice details page end  */


     /* activities detials  start     */
     .donate_card_bg {
         margin: 20px 0;
         background-color: #02BD61;
         border-radius: 15px;
         padding: 10px 25px;
         display: flex;
         justify-content: space-between;
         flex-wrap: wrap;
         column-gap: 10px;
     }

     .donate_card_bg .cardp {
         width: 70%;
     }

     .donate_card_bg .cardp p {

         color: white;
         font-size: 32px;
         font-weight: 700;
     }

     .donate_card_bg .card-btn {
         width: 25%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
     }

     .donate_card_bg .card-btn a {
         text-decoration: none;
         color: black;
         margin: 0 auto;
         width: 75%;
         background-color: #D08322;
         border-radius: 15px;
         font-weight: 600;
         padding: 13px 54px;
         border: 0;
         cursor: pointer;
         border: 0;
     }


     .donate_card_bg a:hover {
         background-color: #E8B65D;


     }



     .course-bg h1 {
         font-size: 48px;
         font-weight: 600;
         padding: 20px 0;
     }

     .notice-title {
         font-size: 24px;
         font-weight: 600;
         color: #02BD61;
     }



     .card-bg {
         background-color: #008E48;
         border-radius: 10px;

     }

     .card-bg h4 {
         color: white;
         font-weight: 600;
     }

     .card-bg ul li {
         font-size: 14px;
         font-weight: 500;
         color: white;
     }

     .card-bg ul li i {
         font-size: 16px;
         margin-right: 5px;
         margin-top: 2px;
         color: #fff;
     }

     .program-details img {
         margin: 20px 0;
         border-radius: 20px;
     }



     /* activities detials  end     */


     /* Donation Page Css start  */

     .donate-page {
         margin: 125px 0;
     }

     .donate-page .donation-card {
         border: none;
         border-radius: 16px;
         overflow: hidden;
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
         background: #ffffff;
         transition: transform 0.3s ease;
     }

     .donate-page .card-header-custom {
         background: linear-gradient(135deg, #02BD61 0%, #019f51 100%);
         color: #ffffff;
         padding: 2.5rem 2rem;
         border: none;
     }

     .donate-page .card-header-custom h4 {
         font-weight: 700;
         margin-bottom: 0.75rem;
         font-size: 1.75rem;
         color: #ffffff;
     }

     .donate-page .card-header-custom p {
         margin: 0;
         opacity: 0.95;
         font-size: 1rem;
         line-height: 1.7;
         color: #ffffff;
     }

     .donate-page .merchant-info {
         background: linear-gradient(135deg, #02BD61 0%, #01a855 100%);
         padding: 1.25rem;
         border-radius: 12px;
         margin-bottom: 1.75rem;
         border-left: 2px solid #019f51;
         color: #ffffff;
         box-shadow: 0 2px 10px rgba(2, 189, 97, 0.2);
     }

     .donate-page .merchant-info strong {
         color: #ffffff;
         font-size: 1.15rem;
         display: flex;
         align-items: center;
         gap: 0.5rem;
     }

     .donate-page .merchant-info small {
         color: rgba(255, 255, 255, 0.9);
         display: block;
         margin-top: 0.5rem;
         font-size: 0.9rem;
     }

     .donate-page .amount-grid {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         gap: 0.875rem;
         margin-bottom: 1.75rem;
     }

     .donate-page .amount-btn {
         padding: 1rem;
         border: 2px solid #e0e0e0;
         background: #ffffff;
         border-radius: 10px;
         font-weight: 700;
         color: #333333;
         transition: all 0.25s ease;
         cursor: pointer;
         font-size: 1.05rem;
     }

     .donate-page .amount-btn:hover {
         border-color: #02BD61;
         color: #02BD61;
         transform: translateY(-3px);
         box-shadow: 0 6px 15px rgba(2, 189, 97, 0.2);
     }

     .donate-page .amount-btn.active {
         background: linear-gradient(135deg, #02BD61 0%, #019f51 100%);
         border-color: #02BD61;
         color: #ffffff;
         transform: translateY(-3px) scale(1.02);
         box-shadow: 0 8px 20px rgba(2, 189, 97, 0.4);
     }

     .donate-page .form-label {
         font-weight: 600;
         color: #2c3e50;
         margin-bottom: 0.625rem;
         font-size: 1rem;
     }

     .donate-page .payment-method {
         padding: 5px 10px;
         box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
         border-radius: 10px;

     }

     .donate-page .form-check {
         position: relative;
         display: block;
         margin-bottom: .5rem;
         margin: 1px 24px;

     }

     .donate-page .form-control {
         border: 1px solid #e9ecef;
         padding: 0.875rem 1.125rem;
         transition: all 0.2s ease;
         font-size: 1rem;
         border-radius: 10px;
         color: #000;
     }

     .donate-page .form-control:focus {
         border-color: #02BD61;
         box-shadow: 0 0 0 0.25rem rgba(2, 189, 97, 0.15);
         outline: none;
     }

     .donate-page .input-group {
         border-radius: 10px;
         overflow: hidden;
     }

     .donate_card_bg .card-btn a {
         background-color: #f78b04;
         color: #fff;
     }

     .donate-page .input-group-text {
         background: linear-gradient(135deg, #02BD61 0%, #019f51 100%);
         border: 2px solid #02BD61;
         border-right: none;
         color: #fff;
         font-weight: 700;
         padding: 0.875rem 1.25rem;
         font-size: 1.1rem;
     }

     .donate-page .category_options {
         border: 1px solid gainsboro;
         outline: none;
         color: black;
         border-radius: 10px;
     }

     .donate-page .input-group .form-control {
         border-left: none;
         border-radius: 0 10px 10px 0;
     }

     .donate-page .input-group:focus-within .input-group-text {
         border-color: #02BD61;
     }

     .donate-page .input-group:focus-within .form-control {
         border-color: #02BD61;
     }

     .donate-page .btn-donate {
         background: linear-gradient(135deg, #02BD61 0%, #019f51 100%);
         border: none;
         padding: 8px 24px;
         font-size: 17px;
         font-weight: 600;
         border-radius: 12px;
         transition: all 0.3s ease;
         text-transform: uppercase;
         letter-spacing: 0.75px;
         box-shadow: 0 4px 15px rgba(2, 189, 97, 0.3);
         color: white;
     }

     .donate-page .btn-donate:hover {
         background: linear-gradient(135deg, #019f51 0%, #017a3f 100%);
         transform: translateY(-3px);
         box-shadow: 0 8px 25px rgba(2, 189, 97, 0.4);
         color: white;
     }

     .donate-page .required {
         color: #dc3545;
         font-weight: 700;
     }

     .alert-success {
         background: #d4edda;
         border: 1px solid #c3e6cb;
         color: #155724;
         padding: 1rem;
         border-radius: 8px;
         margin-bottom: 1rem;
     }



     .header_content {
         height: 78px;
         -webkit-transition: all 200ms ease;
         -moz-transition: all 200ms ease;
         -ms-transition: all 200ms ease;
         -o-transition: all 200ms ease;
         transition: all 200ms ease;
     }

     .join .button a {

         padding: 0 24px;
         line-height: 47px;
         font-size: 12px;
         font-weight: 600;
         color: #FFFFFF;
         text-transform: uppercase;
         white-space: nowrap;
     }

     /* Footer part start   */
     .footer {
         width: 100%;
         background: #0F2920;
         color: #fff;
         padding-top: 186px;
         padding-bottom: 10px;
     }

     .footer_title {
         color: #fff;
     }

     .footer img {
         width: 50%;
     }

     .footer_about_text {
         padding: 0;
     }

     .footer_about_text p {
         padding-top: 28px;
     }

     .footer_contact_title {
         color: #fff;
     }

     .footer_contact_line {
         color: #fff;
     }

     .footer_list li a {
         color: #fff;
     }

     .footer_social ul li a i {
         color: #fff;
     }

     .footer_social ul li a {
         color: #fff;
     }

     .footer_social ul li a i:hover {
         color: #06CC6B;
     }

     .footer_list li a:hover {
         color: #06CC6B;
     }

     .footer p {
         color: #fff;
     }

     .footer-full-content {
         margin-top: 200px;
     }

     .join {
         position: absolute;
         top: -26%;
         left: -1%;
         background: transparent;
         width: 100%;
     }

     /* Footer part End   */
     /* Media queries start  */
     @media(max-width:1199px) {

         h2 {
             font-size: 28px;
             margin: 0;
         }

         .main_nav li a {
             display: block;
             font-size: 10px;

         }




         .lang-btn {
             font-size: 10px;
         }

         .nav-donate-btn {
             font-size: 10px;
         }


     }

     /* Media queries start  */
     @media(max-width:991px) {

         /* Move donate button before the hamburger icon */
         .donate-btn-section {
             order: 1;
             margin-top: 3px;

         }

         .main_nav {
             margin-top: 1px;
         }

         .main_nav_container {
             order: 2;
         }

         .hamburger {
             order: 3;
         }

         .header_container .donate-btn-section a {
             color: white;
             font-size: 11px;
         }

         .home_container {
             position: absolute;
             bottom: 132px;
             left: 0;
             width: 100%;
         }

         .border-bottom {
             padding-bottom: 3px;
             border-bottom: 1px solid #ccc;
         }

         .about-quotes .col-sm-12,
         .about-quotes .col-md-6,
         .about-quotes .col-lg-4:last-child {
             margin-top: 30px;
         }

         .header_container {
             left: 0;
             right: 0;
             transform: none;
             top: 0;
             border-radius: 0;
             width: 100%;
             max-width: none;
         }

         .header_content {
             height: 60px;
             -webkit-transition: all 200ms ease;
             -moz-transition: all 200ms ease;
             -ms-transition: all 200ms ease;
             -o-transition: all 200ms ease;
             transition: all 200ms ease;
         }

         .course-lable {
             color: #000;
             font-size: 14px;
             font-weight: 600;
         }

         .donate-form-bg .course_button {
             background: #02BD61;
             border-radius: 10px;
             margin-top: 34px;
             width: 100%;
         }


         .main_nav_container {
             margin-right: 0;
         }

         .hamburger {
             margin-top: 10px;
         }

         .donate_card_bg .card-btn a {
             width: 105%;
             background-color: #f78b04;
             border-radius: 15px;
             font-weight: 600;
             padding: 10px 38px;
             border: 0;
             cursor: pointer;
             font-size: 13px;
         }

         .donate_card_bg .cardp p {
             color: white;
             font-size: 20px;
             font-weight: 700;
         }

         .menu {
             width: 40%;
             right: -100%;
             padding-left: 30px;
             padding-right: 30px;
             padding-top: 25px;

         }

         .mobile_nav_title {
             padding-left: 0px;
             padding-right: 1px;
             margin: 0px 14px;
             text-align: start;
             line-height: 26px;
             font-size: 16px;
         }

         .menu_close_container {
             position: static;
             top: 30px;
             right: 0px;
             width: 18px;
             height: 18px;
             transform-origin: center center;
             -webkit-transform: rotate(45deg);
             -moz-transform: rotate(45deg);
             -ms-transform: rotate(45deg);
             -o-transform: rotate(45deg);
             transform: rotate(45deg);
             cursor: pointer;
         }

         .join {
             position: absolute;
             top: -13%;
             left: 0%;
             background: transparent;
             width: 100%;
         }

         .footer img {
             width: 20%;
             margin-top: 10px;
         }
     }



     @media(max-width:768px) {
         .menu {
             width: 50%;
             right: -100%;
             padding-left: 30px;
             padding-right: 30px;
             padding-top: 25px;
         }

         .home_container {
             bottom: 119px;
         }

         .donate-form-bg {
             margin-top: -45px;
             padding: 30px 0;
             background: #E8B65D;
             background-image: url("images/donate bg.svg");
             border-radius: 10px;
         }



         index-page .home {
             width: 100%;
             height: 86vh;
         }

         .home-background {
             min-height: 92vh;
         }

         /* Text and buttons on top */
         .home-background .content h1 {
             margin-top: 40px;
             color: #fff;
             font-size: 50px;
             line-height: 50px;

         }

         .home-background .content p {
             color: #fff;
             font-size: 16px;
             line-height: 28.4px;

         }

         .program-details {
             margin: 40px 0;

         }

         .donate-form-bg {
             margin-top: -157px;
             padding: 50px 0;
             background: #E8B65D;
             background-image: url("images/donate bg.svg");
             border-radius: 10px;
         }

         .donate_card_bg .cardp p {
             color: white;
             font-size: 18px;
             font-weight: 700;
         }

         .donate_card_bg .card-btn a {
             width: 110%;
             padding: 10px 18px;
             font-size: 13px;
         }

         .footer {

             padding-top: 218px;
         }
     }

     @media(max-width:575px) {
         .menu {
             width: 60%;
             right: -100%;
             padding-left: 30px;
             padding-right: 30px;
             padding-top: 25px;
         }

         .mobile_nav_title {
             line-height: 20px;
             font-size: 14px;
         }

         .home_container {
             bottom: 68px;
         }

         .index-page .home {
             width: 100%;
             height: 89vh;
         }

         .home-background {
             width: 100%;
             height: 89vh;
         }

         .donate-form-bg {
             margin-top: -157x;
             padding: 40px;
             background: #E8B65D;
             background-image: url("images/donate bg.svg");
             border-radius: 10px;
         }



         .donate_card_bg .cardp p {
             color: white;
             font-size: 17px;
             font-weight: 700;
         }

         .course_button {
             background: #02BD61;
             border-radius: 10px;
             width: 97%;
         }

         .donate_card_bg .card-btn a {
             width: 105%;
             background-color: #D08322;
             border-radius: 15px;
             font-weight: 600;
             padding: 10px 38px;
             border: 0;
             cursor: pointer;
             font-size: 13px;
         }

         .notice {
             margin-top: 189px;
         }

         .notice-page .card_container {
             margin: 161px 0;
         }

         .donate-page .card-body {
             padding: 1.5rem !important;
         }

         .donate-page .btn-donate {
             font-size: 1.125rem;
             padding: 1rem;
         }


         .join {
             top: -13%;
             left: 3%;
             width: 95%;
         }

         .footer_about_text p {
             margin-top: 0;
             padding-top: 10px;
         }

         .footer .logo_img img {
             width: 100px;
         }
     }

     @media(max-width:460px) {
         .menu {
             width: 80%;
             right: -100%;
             padding-left: 30px;
             padding-right: 30px;
             padding-top: 25px;
         }

         .menu_nav ul li {
             margin-bottom: 18px;
         }

         .menu_nav ul li a {
             font-size: 17px;
             color: #000;
             font-weight: 600;

         }

         .index-page .home {
             width: 100%;
             height: 89vh;
         }

         .home-background {
             width: 100%;
             height: 89vh;
         }

         .home-background .btn {
             margin: 10px;
             padding: 10px 17px;
             font-size: 14px
         }

         .home_container {
             bottom: 68px;
         }

         .home-background .content h1 {
             margin-top: -55px;
             color: #fff;
             font-size: 36px;
             line-height: 50px;
         }

         .home-background .content p {
             color: #fff;
             font-size: 14px;
             line-height: 28.4px;
         }

         .donate_card_bg .cardp p {
             color: white;
             font-size: 17px;
             font-weight: 700;
         }

         .donate_card_bg .card-btn a {
             width: 100%;
             border-radius: 15px;
             padding: 10px 12px;
             font-size: 13px;
             margin-left: 0 auto;
         }

         .donate-form-bg {
             margin-top: -214px;
             padding: 40px 0;
             background: #E8B65D;
             background-image: url("images/donate bg.svg");
             border-radius: 10px;
         }

         .course_search_form>div {
             width: 102%;
             margin-bottom: 15px;
         }

         .notice {
             margin-top: 189px;
         }

         .footer {

             padding-top: 212px;
         }

     }




     /* Media queries end */
 </style>