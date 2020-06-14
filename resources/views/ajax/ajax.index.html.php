<div class="table-order">
    <table class="table swiper-container">

        <tbody>
        <?php


        foreach ($orders as $row) {
            ?>
            <tr>
                <td>
                    <div class="name">
                                                <span class="avatar-order">
                                                    <i class="fas fa-user-circle"></i>
                                                </span>

                        <span><?= $row->user->name; ?></span>
                    </div>
                </td>
                <td>
                    <div class="loan-cat"><?php echo $row->borrow->option; ?></div>
                </td>
                <td class="td-150">
                    <div class="amount-money"><?php echo number_format($row->packet, 0, ',', '.'); ?></div>
                </td>
                <td class="td-117">
                    <div class="date-term"><span><?php echo $row->user_time; ?></span><br>Ngày
                    </div>
                </td>
                <td>
                    <div class="phone">
                        0<?= substr($row->user->phone, 0, 1) . '*****' . substr($row->user->phone, 6, 9); ?></div>
                </td>

                <td class="td-132">
                    <div class="local">
                        <span class="address"><?php echo $row->city->name; ?></span>
                        <span><?php echo date('H:i d/m/Y', strtotime($row->start)); ?></span>
                    </div>
                </td>
                <td class="text-center td-120">
                    <div class="sale-price">
                        <span class="price_discount"><?php echo number_format($row->borrow->price * (100 - $row->borrow->discount) / 100, 0, ',', '.'); ?>₫</span>
                        <hr>
                        <div class="price_percent_discount">
                            <span class="price_current"><?php echo number_format($row->borrow->price, 0, ',', '.'); ?></span>
                            <span class="percent_discount"> -<?php echo $row->borrow->discount ?>%</span>
                        </div>
                    </div>
                </td>
            </tr>


        <?php } ?>
        </tbody>
    </table>
</div>