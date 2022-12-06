<?php //519136c4e20877f39f2baf090fc589f3
/** @noinspection all */

namespace App\Models {

    use Database\Factories\CategoryFactory;
    use Database\Factories\CustomerFactory;
    use Database\Factories\EmployeeFactory;
    use Database\Factories\ImportRequestDetailFactory;
    use Database\Factories\ImportRequestFactory;
    use Database\Factories\OrderDetailFactory;
    use Database\Factories\OrderFactory;
    use Database\Factories\ProductFactory;
    use Database\Factories\ProductSerialFactory;
    use Database\Factories\SupplierFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_Customer_C;
    use LaravelIdea\Helper\App\Models\_IH_Customer_QB;
    use LaravelIdea\Helper\App\Models\_IH_Employee_C;
    use LaravelIdea\Helper\App\Models\_IH_Employee_QB;
    use LaravelIdea\Helper\App\Models\_IH_ImportRequestDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_ImportRequestDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_ImportRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_ImportRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_OrderDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSerial_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSerial_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Supplier_C;
    use LaravelIdea\Helper\App\Models\_IH_Supplier_QB;

    /**
     * @property int $id
     * @property string $Name
     * @property bool $Status
     * @property int $ParentId
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @ownLinks ParentId,\App\Models\Category,Id
     * @foreignLinks Id,\App\Models\Category,ParentId|id,\App\Models\Product,CategoryId
     * @mixin _IH_Category_QB
     * @method static CategoryFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Category extends Model {}

    /**
     * @property int $id
     * @property string $Name
     * @property string $Address
     * @property string $PhoneNumber
     * @property string $Email
     * @property string $Username
     * @property string $Password
     * @property bool $Status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Customer_QB onWriteConnection()
     * @method _IH_Customer_QB newQuery()
     * @method static _IH_Customer_QB on(null|string $connection = null)
     * @method static _IH_Customer_QB query()
     * @method static _IH_Customer_QB with(array|string $relations)
     * @method _IH_Customer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Customer_C|Customer[] all()
     * @foreignLinks id,\App\Models\Order,CustomerId
     * @mixin _IH_Customer_QB
     * @method static CustomerFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Customer extends Model {}

    /**
     * @property int $id
     * @property string $Name
     * @property string $Address
     * @property string $Username
     * @property string $Password
     * @property string $PhoneNumber
     * @property string $Email
     * @property bool $Status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Employee_QB onWriteConnection()
     * @method _IH_Employee_QB newQuery()
     * @method static _IH_Employee_QB on(null|string $connection = null)
     * @method static _IH_Employee_QB query()
     * @method static _IH_Employee_QB with(array|string $relations)
     * @method _IH_Employee_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Employee_C|Employee[] all()
     * @foreignLinks id,\App\Models\ImportRequest,EmployeeId
     * @mixin _IH_Employee_QB
     * @method static EmployeeFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Employee extends Model {}

    /**
     * @property int $id
     * @property Carbon $ImportDate
     * @property string $Note
     * @property int $SupplierId
     * @property int $EmployeeId
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ImportRequest_QB onWriteConnection()
     * @method _IH_ImportRequest_QB newQuery()
     * @method static _IH_ImportRequest_QB on(null|string $connection = null)
     * @method static _IH_ImportRequest_QB query()
     * @method static _IH_ImportRequest_QB with(array|string $relations)
     * @method _IH_ImportRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ImportRequest_C|ImportRequest[] all()
     * @ownLinks SupplierId,\App\Models\Supplier,id|EmployeeId,\App\Models\Employee,id
     * @foreignLinks id,\App\Models\ImportRequestDetail,ImportRequestId
     * @mixin _IH_ImportRequest_QB
     * @method static ImportRequestFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class ImportRequest extends Model {}

    /**
     * @property int $id
     * @property int $ImportRequestId
     * @property int $ProductId
     * @property int $Quantity
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ImportRequestDetail_QB onWriteConnection()
     * @method _IH_ImportRequestDetail_QB newQuery()
     * @method static _IH_ImportRequestDetail_QB on(null|string $connection = null)
     * @method static _IH_ImportRequestDetail_QB query()
     * @method static _IH_ImportRequestDetail_QB with(array|string $relations)
     * @method _IH_ImportRequestDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ImportRequestDetail_C|ImportRequestDetail[] all()
     * @ownLinks ImportRequestId,\App\Models\ImportRequest,id|ProductId,\App\Models\Product,id
     * @mixin _IH_ImportRequestDetail_QB
     * @method static ImportRequestDetailFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class ImportRequestDetail extends Model {}

    /**
     * @property int $id
     * @property Carbon $OrderDateTime
     * @property string $Note
     * @property int $CustomerId
     * @property bool $Status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks CustomerId,\App\Models\Customer,id
     * @foreignLinks id,\App\Models\OrderDetail,OrderId
     * @mixin _IH_Order_QB
     * @method static OrderFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Order extends Model {}

    /**
     * @property int $id
     * @property int $OrderId
     * @property int $ProductId
     * @property int $Quantity
     * @property float $SalePrice
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_OrderDetail_QB onWriteConnection()
     * @method _IH_OrderDetail_QB newQuery()
     * @method static _IH_OrderDetail_QB on(null|string $connection = null)
     * @method static _IH_OrderDetail_QB query()
     * @method static _IH_OrderDetail_QB with(array|string $relations)
     * @method _IH_OrderDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderDetail_C|OrderDetail[] all()
     * @ownLinks OrderId,\App\Models\Order,id|ProductId,\App\Models\Product,id
     * @mixin _IH_OrderDetail_QB
     * @method static OrderDetailFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class OrderDetail extends Model {}

    /**
     * @property int $id
     * @property string $Name
     * @property string $Avatar
     * @property string $Description
     * @property float $SalePrice
     * @property int $Weight
     * @property int $StockQuantity
     * @property int $CategoryId
     * @property bool $Status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks CategoryId,\App\Models\Category,id
     * @foreignLinks id,\App\Models\ProductSerial,ProductId|id,\App\Models\ImportRequestDetail,ProductId|id,\App\Models\OrderDetail,ProductId
     * @mixin _IH_Product_QB
     * @method static ProductFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Product extends Model {}

    /**
     * @property int $id
     * @property int $ProductId
     * @property string $Serial
     * @property int $StockQuantity
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ProductSerial_QB onWriteConnection()
     * @method _IH_ProductSerial_QB newQuery()
     * @method static _IH_ProductSerial_QB on(null|string $connection = null)
     * @method static _IH_ProductSerial_QB query()
     * @method static _IH_ProductSerial_QB with(array|string $relations)
     * @method _IH_ProductSerial_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSerial_C|ProductSerial[] all()
     * @ownLinks ProductId,\App\Models\Product,id
     * @mixin _IH_ProductSerial_QB
     * @method static ProductSerialFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class ProductSerial extends Model {}

    /**
     * @property int $id
     * @property string $Name
     * @property string $Address
     * @property string $PhoneNumber
     * @property bool $Status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Supplier_QB onWriteConnection()
     * @method _IH_Supplier_QB newQuery()
     * @method static _IH_Supplier_QB on(null|string $connection = null)
     * @method static _IH_Supplier_QB query()
     * @method static _IH_Supplier_QB with(array|string $relations)
     * @method _IH_Supplier_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Supplier_C|Supplier[] all()
     * @foreignLinks id,\App\Models\ImportRequest,SupplierId
     * @mixin _IH_Supplier_QB
     * @method static SupplierFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Supplier extends Model {}
}
