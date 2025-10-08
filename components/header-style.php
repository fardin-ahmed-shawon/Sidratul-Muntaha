 <style>
     @charset "utf-8";
     @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800,900');

     /*********************************
2. Body and some general stuff
*********************************/
     ::selection {
         background: #02BD61;
         color: #FFFFFF;
     }

     body {
         font-family: "Poppins", sans-serif;
     }


     /* Nav start  */
     .header_container {
         background: #ebebeb;
         background: linear-gradient(100deg, rgba(235, 235, 235, 1) 62%, rgba(255, 255, 255, 1) 100%);
         border-bottom: 1px solid #ebebeb;

     }

     .main_nav_contaner {
         margin: 0 auto;
     }

     .main_nav li a {
         background: transparent;
     }

     .main_nav li a:hover,
     .main_nav li.active a {
         background: #02BD61;
         border-radius: 5px;
     }

     .header_container .donate-btn-section a {
         color: white;
     }

     .header_container .donate-btn-section a:hover {
         color: white;
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

     /* Nav end */
     /* Home page css Start   */

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
         background: #02BD61;
     }

     .home_slider_nav {
         background: #02BD61;
     }

     .home_slider_nav:hover {
         background: #06CC6B;
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

     /* Banner Below end    */


     .courses {
         padding-top: 1px;


     }

     .donate-form-bg {
         padding: 50px;
         background: #E8B65D;
         background-image: url("images/donate bg.svg");
         border-radius: 10px;
     }

     .section_subtitle {
         margin-top: 40px;
         margin-bottom: 20px;
     }

     /* Donation Part Start   */
     .course_search_form>div::after {
         background: #06CC6B;
         width: 95%;
     }

     .course_button {
         background: #02BD61;
     }

     .course_button:hover {
         background: #02BD61;
     }

     .course_button .button_arrow {
         background: #05A657;
     }

     .course_button:hover .button_arrow {
         background: #06CC6B;
     }

     /* Donation Part End   */

     /* Activities part start   */
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
         left: -82px;
     }

     .courses_slider_next {
         right: -82px;
     }

     .courses_slider_nav:hover {
         background: #06CC6B;
     }

     .owl-item .course_body {
         border-radius: 0px 0px 20px 20px;
         -webkit-border-radius: 0px 0px 20px 20px;
         -moz-border-radius: 0px 0px 20px 20px;
     }

     .owl-carousel .owl-item img {
         border-radius: 20px 20px 0px 0px;
         -webkit-border-radius: 20px 20px 0px 0px;
         -moz-border-radius: 20px 20px 0px 0px;
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

     iframe {
         border-radius: 20px;
     }

     /* phoots    */

     .photos img {
         width: 100%;
         height: 100%;
         border-radius: 20px;
         object-fit: contain;
     }


     /* Home page css end   */


     /* About Page css Start   */
     .breadcrumbs ul li {
         color: #02BD61;
     }

     .breadcrumbs ul li a:hover {
         color: #02BD61;
     }

     .tab::after {

         background: #02BD61;
     }

     /* About Page css End   */

     /* Activities Page css start   */
     .course_title h3 a {
         font-size: 18px;
         overflow: hidden;
         text-overflow: ellipsis;
         width: 200px;
         display: block;
         white-space: nowrap;
     }
     .text-elipsis {
         overflow: hidden;
         text-overflow: ellipsis;
         width: 200px;
         display: block;
         white-space: nowrap;
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
         background: #EEF2F0;
         font-weight: 600;
         color: #008E48;
         border-radius: 20px;
     }

     .notice-features h1 {
         font-size: 20px;
         font-weight: 600;
         color: #008E48;
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

     .course_body {
         border-radius: 0px;

     }

     .card-bg {
         background-color: #EEF2F0;
         border-radius: 10px;
     }

     .card-bg ul li {
         font-size: 14px;
         font-weight: 600;
     }

     .card-bg ul li i {
         font-size: 16px;
         margin-right: 5px;
         margin-top: 2px;
         color: #06CC6B;
     }

     .program-details img {
         margin: 20px 0;
         border-radius: 20px;
     }

     .program-details {
         margin: 80px 0;

     }

     /* activities detials  end     */


     /* Donation Page Css start  */
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
         border-left: 5px solid #019f51;
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

     .donate-page .form-control {
         border: 2px solid #e9ecef;
         padding: 0.875rem 1.125rem;
         transition: all 0.2s ease;
         font-size: 1rem;
         border-radius: 10px;
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

     .donate-page .input-group-text {
         background: linear-gradient(135deg, #02BD61 0%, #019f51 100%);
         border: 2px solid #02BD61;
         border-right: none;
         color: #ffffff;
         font-weight: 700;
         padding: 0.875rem 1.25rem;
         font-size: 1.1rem;
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
         padding: 1.125rem 2rem;
         font-size: 1.25rem;
         font-weight: 700;
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

     /* Donation Page Css end */
     .header_container {
         position: fixed;
         top: 5px;
         left: 26px;
         border-radius: 15px;
         background: #ebebeb;
         background: linear-gradient(100deg, rgba(235, 235, 235, 1) 62%, rgba(255, 255, 255, 1) 100%);
         border-bottom: 1px solid #ebebeb;
         width: 95%;
         margin: 20px auto;
         box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);

     }

     .header_content {
         height: 78px;
         -webkit-transition: all 200ms ease;
         -moz-transition: all 200ms ease;
         -ms-transition: all 200ms ease;
         -o-transition: all 200ms ease;
         transition: all 200ms ease;
     }

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

         /* Media queries start  */
         @media(max-width:991px) {
             .header_container {
                 position: inherit;
                 top: 0;
                 left: 0;
                 border-radius: 0px;
                 background: #ebebeb;
                 background: linear-gradient(100deg, rgba(235, 235, 235, 1) 62%, rgba(255, 255, 255, 1) 100%);
                 border-bottom: 1px solid #ebebeb;
                 width: 100%;
                 margin: 0;

             }

             .header_content {
                 height: 60px;
                 -webkit-transition: all 200ms ease;
                 -moz-transition: all 200ms ease;
                 -ms-transition: all 200ms ease;
                 -o-transition: all 200ms ease;
                 transition: all 200ms ease;
             }

             .main_nav_container {
                 margin-left: auto;
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

             .donate_card_bg .cardp p {
                 color: white;
                 font-size: 20px;
                 font-weight: 700;
             }

             .menu {
                 width: 60%;
                 right: -100%;
                 padding-left: 30px;
                 padding-right: 30px;
                 padding-top: 80px;
             }
         }


         .lang-btn {
             font-size: 10px;
         }

         .nav-donate-btn {
             font-size: 10px;
         }
     }


     @media(max-width:768px) {

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
     }

     @media(max-width:575px) {
         .home_container {
             bottom: 68px;
         }


         .donate_card_bg .cardp p {
             color: white;
             font-size: 17px;
             font-weight: 700;
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
     }

     @media(max-width:460px) {
         .home_container {
             bottom: 68px;
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

         .notice {
             margin-top: 189px;
         }
     }




     /* Media queries end */
 </style>