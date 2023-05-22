{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
<script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>



{{-- <div class="modal-content">
    <div class="modal-review-title is-flex is-align-items-center px-4"><img
            src="https://cdn2.cellphones.com.vn/213x213,webp,q100/media/wysiwyg/Shipper_CPS.jpg" width="213"
            height="213"> <button aria-label="close" class="delete"></button> <button class="button">Đăng nhập để đánh
            giá</button>
        <p class="cps-devider-text"><span>Hoặc</span></p>
    </div>
    <form enctype="multipart/form-data" class="modal-review-content p-4"><input type="text" placeholder="Họ và Tên"
            class="input my-2"> <input type="tel" placeholder="Số điện thoại" maxlength="10" class="input my-2">
        <div class="group-input is-flex"><input id="image-text" type="text" placeholder="Hình ảnh thực tế"
                class="input input__file my-2"> <input id="image" accept="image/x-png,image/gif,image/jpeg"
                multiple="multiple" type="file" class="is-hidden"> <label for="image"
                class="btn-add my-2 is-flex is-align-items-center ml-auto">
                <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M147.8 192H480V144C480 117.5 458.5 96 432 96h-160l-64-64h-160C21.49 32 0 53.49 0 80v328.4l90.54-181.1C101.4 205.6 123.4 192 147.8 192zM543.1 224H147.8C135.7 224 124.6 230.8 119.2 241.7L0 480h447.1c12.12 0 23.2-6.852 28.62-17.69l96-192C583.2 249 567.7 224 543.1 224z">
                        </path>
                    </svg></div>
                Thêm ảnh
            </label></div>
        <textarea placeholder="Xin mời chia sẻ một số cảm nhận về sản phẩm" class="textarea"></textarea>
        <div class="modal-review-star my-3 p-2">
            <p class="my-2 title is-6">Bạn thấy sản phẩm này như thế nào?</p>
            <div class="is-flex is-justify-content-space-evenly">
                <div class="has-text-centered">
                    <div icon="star" class="icon" style="cursor: pointer;"><svg height="15"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg></div>
                    <p>Rất tệ</p>
                </div>
                <div class="has-text-centered">
                    <div icon="star" class="icon" style="cursor: pointer;"><svg height="15"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg></div>
                    <p>Tệ</p>
                </div>
                <div class="has-text-centered">
                    <div icon="star" class="icon" style="cursor: pointer;"><svg height="15"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg></div>
                    <p>Bình thường</p>
                </div>
                <div class="has-text-centered">
                    <div icon="star" class="icon" style="cursor: pointer;"><svg height="15"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg></div>
                    <p>Tốt</p>
                </div>
                <div class="has-text-centered">
                    <div icon="star" class="icon" style="cursor: pointer;"><svg height="15"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                            </path>
                        </svg></div>
                    <p>Rất tốt</p>
                </div>
            </div>
        </div>
        <!----> <button type="submit" class="button has-text-white">GỬI ĐÁNH GIÁ</button>
        <!---->
    </form>
</div> --}}
