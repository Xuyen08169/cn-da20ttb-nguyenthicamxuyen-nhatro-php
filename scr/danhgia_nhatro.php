<?php
include("header.php");




$mant = isset($_GET["mant"]) ? $_GET["mant"] : null;


if ($mant) {
    
    $query = "SELECT * FROM nhatro WHERE mant = $mant";
    $result = $conn->query($query);

    // Check if the query was successful and retrieve product details
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
        // Now $product contains details of the product with the specified $masanpham
    } else {
        // Handle the case where the product is not found
        echo "Product not found.";
        exit(); // You may choose to redirect the user or take other actions
    }
} else {
    // Handle the case where $masanpham is not set
    echo "Invalid product ID.";
    exit(); // You may choose to redirect the user or take other actions
}
?>



<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
.ttcn-left img {
    display: block;
    border-radius: 15px;
}

.ttcn-right {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ttcn {
    display: flex;
    background-color: F5F7F8;
    margin: 30px 200px;
    padding: 30px 0px;
    border-radius: 10px;
    align-items: center;
    gap: 30px;
    justify-content: center;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25)
}

.ttcb {
    display: flex;
    padding: 10px 0px;
    gap: 15px;
    font-size: 17px;
}

.td-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 400;
    gap: 5px;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.td-tt {
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-bottom: 150px;
}

.btn-ttcn a {
    background-color: black;
    color: white;
    padding: 15px 20px;
    border-radius: 10px;
    text-decoration: none;
}
</style>
<form action="xuly_danhgia.php" method="post">
    <div class="full-ttcn">
        <div class="ttcn">
            <div class="ttcn-left">
            <img src="<?php echo $product['hinhanh']; ?>" width="200px" height="200px">
            </div>
            <div class="ttcn-right">
                <div>
                    <div class="td-tt">
                        <label>Đánh giá sản phẩm</label>
                    </div>
                </div>
                <div>
                    <div class="ttcb">
                        <div class="td-ttcn">
                            <label>Tên nhà trọ:</label>
                            <!-- Display the product name from PHP -->
                            <label><?php echo $product['tennt']; ?></label>
                            <input type="hidden" name="mant" value="<?php echo $product['mant']; ?>">
                            <!-- Include hidden input for masanpham -->

                            <label>Mức độ hài lòng:</label>
                            <select name="mucdohailong">
                                <option value="#" selected="selected"></option>
                                <option value="Tệ">Tệ</option>
                                <option value="Bình thường">Bình thường</option>
                                <option value="Hài lòng">Hài lòng</option>
                                <option value="Rất hài lòng">Rất hài lòng</option>
                            </select>
                            <label>Đánh giá:</label>
                            <textarea style="border-radius:10px;" name="danhgia" rows="10" cols="50"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-ttcn">
            <button type="submit">Đánh giá</button>
        </div>
    </div>
</form>

<?php 
include("footer.php");
?>