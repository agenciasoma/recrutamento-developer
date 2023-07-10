<?php
function login_enqueue_scripts(){ ?>
    <div class="background-cover"></div>
        <style type="text/css" media="screen">
            body.login{
                background: #fff;
            }
            .background-cover{
                background-size: cover !important;
                position:fixed;
                top:0;
                left:0;
                z-index:10;
                overflow: hidden;
                width: 100%;
                height:100%;
                opacity: 0.9;
            }
            #login{
                z-index:9999;
                position:relative;
                padding-top: 45px !important;
            }
            .login h1 {
                text-align: center;
                margin: 0;
                padding: 0;
            }
            .login form {
                margin-top: 0 !important;
                background-color: #e8e7e7 !important;
            }
            .login .message {
                margin-bottom: 0 !important;
            }
            .login h1 a {
                background: url('<?php echo get_bloginfo('template_directory') ?>/src/images/logo-somadev.png') no-repeat center top !important;
                margin-bottom: 20px !important;
                padding-bottom: 0px;
                width: 325px !important;
                height: 90px !important;
                display: block;
            }
            input.button-primary, button.button-primary, .button-primary{
                border-radius: 3px !important;
                border:none !important;
                background-color: #85ceb3 !important;
                font-weight:normal !important;
                text-shadow:none !important;
                }
                .button:active, .submit input:active, .button-secondary:active {
                    background: #85ceb3 !important;
                    text-shadow: none !important;
                }
                .login #nav a, .login #backtoblog a {
                    color: #85ceb3 !important;
                    text-shadow: none !important;
                }
                .login #nav a:hover, .login #backtoblog a:hover{
                    color: #85ceb3 !important;
                    text-shadow: none !important;
                }
                .login #nav, .login #backtoblog{
                    text-shadow: none !important;
                }
                .login form {

                    box-shadow: 0 1px 3px rgba(0,0,0,.13) !important;
                }
            </style>
    <?php } add_action( 'login_enqueue_scripts', 'login_enqueue_scripts' );
?>