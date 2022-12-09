<?php //3cb6c5e36221a97038111973a81b2d90
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Category;
    use App\Models\Customer;
    use App\Models\Employee;
    use App\Models\ImportRequest;
    use App\Models\ImportRequestDetail;
    use App\Models\Order;
    use App\Models\OrderDetail;
    use App\Models\Product;
    use App\Models\ProductSerial;
    use App\Models\Supplier;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereName($value)
     * @method _IH_Category_QB whereStatus($value)
     * @method _IH_Category_QB whereParentid($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method Customer|null getOrPut($key, $value)
     * @method Customer|$this shift(int $count = 1)
     * @method Customer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Customer|$this pop(int $count = 1)
     * @method Customer|null pull($key, \Closure $default = null)
     * @method Customer|null last(callable $callback = null, \Closure $default = null)
     * @method Customer|$this random(callable|int|null $number = null)
     * @method Customer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Customer|null get($key, \Closure $default = null)
     * @method Customer|null first(callable $callback = null, \Closure $default = null)
     * @method Customer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Customer|null find($key, $default = null)
     * @method Customer[] all()
     */
    class _IH_Customer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Customer[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Customer_QB whereId($value)
     * @method _IH_Customer_QB whereName($value)
     * @method _IH_Customer_QB whereAddress($value)
     * @method _IH_Customer_QB wherePhonenumber($value)
     * @method _IH_Customer_QB whereEmail($value)
     * @method _IH_Customer_QB whereUsername($value)
     * @method _IH_Customer_QB wherePassword($value)
     * @method _IH_Customer_QB whereStatus($value)
     * @method _IH_Customer_QB whereCreatedAt($value)
     * @method _IH_Customer_QB whereUpdatedAt($value)
     * @method Customer baseSole(array|string $columns = ['*'])
     * @method Customer create(array $attributes = [])
     * @method _IH_Customer_C|Customer[] cursor()
     * @method Customer|null|_IH_Customer_C|Customer[] find($id, array|string $columns = ['*'])
     * @method _IH_Customer_C|Customer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Customer|_IH_Customer_C|Customer[] findOrFail($id, array|string $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOrNew($id, array|string $columns = ['*'])
     * @method Customer first(array|string $columns = ['*'])
     * @method Customer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Customer firstOrCreate(array $attributes = [], array $values = [])
     * @method Customer firstOrFail(array|string $columns = ['*'])
     * @method Customer firstOrNew(array $attributes = [], array $values = [])
     * @method Customer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Customer forceCreate(array $attributes)
     * @method _IH_Customer_C|Customer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Customer_C|Customer[] get(array|string $columns = ['*'])
     * @method Customer getModel()
     * @method Customer[] getModels(array|string $columns = ['*'])
     * @method _IH_Customer_C|Customer[] hydrate(array $items)
     * @method Customer make(array $attributes = [])
     * @method Customer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Customer[]|_IH_Customer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Customer[]|_IH_Customer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Customer sole(array|string $columns = ['*'])
     * @method Customer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Customer_QB extends _BaseBuilder {}

    /**
     * @method Employee|null getOrPut($key, $value)
     * @method Employee|$this shift(int $count = 1)
     * @method Employee|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Employee|$this pop(int $count = 1)
     * @method Employee|null pull($key, \Closure $default = null)
     * @method Employee|null last(callable $callback = null, \Closure $default = null)
     * @method Employee|$this random(callable|int|null $number = null)
     * @method Employee|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Employee|null get($key, \Closure $default = null)
     * @method Employee|null first(callable $callback = null, \Closure $default = null)
     * @method Employee|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Employee|null find($key, $default = null)
     * @method Employee[] all()
     */
    class _IH_Employee_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Employee[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Employee_QB whereId($value)
     * @method _IH_Employee_QB whereName($value)
     * @method _IH_Employee_QB whereAddress($value)
     * @method _IH_Employee_QB whereUsername($value)
     * @method _IH_Employee_QB wherePassword($value)
     * @method _IH_Employee_QB wherePhonenumber($value)
     * @method _IH_Employee_QB whereEmail($value)
     * @method _IH_Employee_QB whereStatus($value)
     * @method _IH_Employee_QB whereCreatedAt($value)
     * @method _IH_Employee_QB whereUpdatedAt($value)
     * @method Employee baseSole(array|string $columns = ['*'])
     * @method Employee create(array $attributes = [])
     * @method _IH_Employee_C|Employee[] cursor()
     * @method Employee|null|_IH_Employee_C|Employee[] find($id, array|string $columns = ['*'])
     * @method _IH_Employee_C|Employee[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Employee|_IH_Employee_C|Employee[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Employee|_IH_Employee_C|Employee[] findOrFail($id, array|string $columns = ['*'])
     * @method Employee|_IH_Employee_C|Employee[] findOrNew($id, array|string $columns = ['*'])
     * @method Employee first(array|string $columns = ['*'])
     * @method Employee firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Employee firstOrCreate(array $attributes = [], array $values = [])
     * @method Employee firstOrFail(array|string $columns = ['*'])
     * @method Employee firstOrNew(array $attributes = [], array $values = [])
     * @method Employee firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Employee forceCreate(array $attributes)
     * @method _IH_Employee_C|Employee[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Employee_C|Employee[] get(array|string $columns = ['*'])
     * @method Employee getModel()
     * @method Employee[] getModels(array|string $columns = ['*'])
     * @method _IH_Employee_C|Employee[] hydrate(array $items)
     * @method Employee make(array $attributes = [])
     * @method Employee newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Employee[]|_IH_Employee_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Employee[]|_IH_Employee_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Employee sole(array|string $columns = ['*'])
     * @method Employee updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Employee_QB extends _BaseBuilder {}

    /**
     * @method ImportRequestDetail|null getOrPut($key, $value)
     * @method ImportRequestDetail|$this shift(int $count = 1)
     * @method ImportRequestDetail|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ImportRequestDetail|$this pop(int $count = 1)
     * @method ImportRequestDetail|null pull($key, \Closure $default = null)
     * @method ImportRequestDetail|null last(callable $callback = null, \Closure $default = null)
     * @method ImportRequestDetail|$this random(callable|int|null $number = null)
     * @method ImportRequestDetail|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ImportRequestDetail|null get($key, \Closure $default = null)
     * @method ImportRequestDetail|null first(callable $callback = null, \Closure $default = null)
     * @method ImportRequestDetail|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ImportRequestDetail|null find($key, $default = null)
     * @method ImportRequestDetail[] all()
     */
    class _IH_ImportRequestDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ImportRequestDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ImportRequestDetail_QB whereId($value)
     * @method _IH_ImportRequestDetail_QB whereImportrequestid($value)
     * @method _IH_ImportRequestDetail_QB whereProductid($value)
     * @method _IH_ImportRequestDetail_QB whereQuantity($value)
     * @method _IH_ImportRequestDetail_QB whereCreatedAt($value)
     * @method _IH_ImportRequestDetail_QB whereUpdatedAt($value)
     * @method ImportRequestDetail baseSole(array|string $columns = ['*'])
     * @method ImportRequestDetail create(array $attributes = [])
     * @method _IH_ImportRequestDetail_C|ImportRequestDetail[] cursor()
     * @method ImportRequestDetail|null|_IH_ImportRequestDetail_C|ImportRequestDetail[] find($id, array|string $columns = ['*'])
     * @method _IH_ImportRequestDetail_C|ImportRequestDetail[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ImportRequestDetail|_IH_ImportRequestDetail_C|ImportRequestDetail[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImportRequestDetail|_IH_ImportRequestDetail_C|ImportRequestDetail[] findOrFail($id, array|string $columns = ['*'])
     * @method ImportRequestDetail|_IH_ImportRequestDetail_C|ImportRequestDetail[] findOrNew($id, array|string $columns = ['*'])
     * @method ImportRequestDetail first(array|string $columns = ['*'])
     * @method ImportRequestDetail firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImportRequestDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method ImportRequestDetail firstOrFail(array|string $columns = ['*'])
     * @method ImportRequestDetail firstOrNew(array $attributes = [], array $values = [])
     * @method ImportRequestDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ImportRequestDetail forceCreate(array $attributes)
     * @method _IH_ImportRequestDetail_C|ImportRequestDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ImportRequestDetail_C|ImportRequestDetail[] get(array|string $columns = ['*'])
     * @method ImportRequestDetail getModel()
     * @method ImportRequestDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_ImportRequestDetail_C|ImportRequestDetail[] hydrate(array $items)
     * @method ImportRequestDetail make(array $attributes = [])
     * @method ImportRequestDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ImportRequestDetail[]|_IH_ImportRequestDetail_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ImportRequestDetail[]|_IH_ImportRequestDetail_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ImportRequestDetail sole(array|string $columns = ['*'])
     * @method ImportRequestDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ImportRequestDetail_QB extends _BaseBuilder {}

    /**
     * @method ImportRequest|null getOrPut($key, $value)
     * @method ImportRequest|$this shift(int $count = 1)
     * @method ImportRequest|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ImportRequest|$this pop(int $count = 1)
     * @method ImportRequest|null pull($key, \Closure $default = null)
     * @method ImportRequest|null last(callable $callback = null, \Closure $default = null)
     * @method ImportRequest|$this random(callable|int|null $number = null)
     * @method ImportRequest|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ImportRequest|null get($key, \Closure $default = null)
     * @method ImportRequest|null first(callable $callback = null, \Closure $default = null)
     * @method ImportRequest|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ImportRequest|null find($key, $default = null)
     * @method ImportRequest[] all()
     */
    class _IH_ImportRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ImportRequest[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ImportRequest_QB whereId($value)
     * @method _IH_ImportRequest_QB whereImportdate($value)
     * @method _IH_ImportRequest_QB whereNote($value)
     * @method _IH_ImportRequest_QB whereSupplierid($value)
     * @method _IH_ImportRequest_QB whereEmployeeid($value)
     * @method _IH_ImportRequest_QB whereCreatedAt($value)
     * @method _IH_ImportRequest_QB whereUpdatedAt($value)
     * @method ImportRequest baseSole(array|string $columns = ['*'])
     * @method ImportRequest create(array $attributes = [])
     * @method _IH_ImportRequest_C|ImportRequest[] cursor()
     * @method ImportRequest|null|_IH_ImportRequest_C|ImportRequest[] find($id, array|string $columns = ['*'])
     * @method _IH_ImportRequest_C|ImportRequest[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ImportRequest|_IH_ImportRequest_C|ImportRequest[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImportRequest|_IH_ImportRequest_C|ImportRequest[] findOrFail($id, array|string $columns = ['*'])
     * @method ImportRequest|_IH_ImportRequest_C|ImportRequest[] findOrNew($id, array|string $columns = ['*'])
     * @method ImportRequest first(array|string $columns = ['*'])
     * @method ImportRequest firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ImportRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method ImportRequest firstOrFail(array|string $columns = ['*'])
     * @method ImportRequest firstOrNew(array $attributes = [], array $values = [])
     * @method ImportRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ImportRequest forceCreate(array $attributes)
     * @method _IH_ImportRequest_C|ImportRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ImportRequest_C|ImportRequest[] get(array|string $columns = ['*'])
     * @method ImportRequest getModel()
     * @method ImportRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_ImportRequest_C|ImportRequest[] hydrate(array $items)
     * @method ImportRequest make(array $attributes = [])
     * @method ImportRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ImportRequest[]|_IH_ImportRequest_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ImportRequest[]|_IH_ImportRequest_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ImportRequest sole(array|string $columns = ['*'])
     * @method ImportRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ImportRequest_QB extends _BaseBuilder {}

    /**
     * @method OrderDetail|null getOrPut($key, $value)
     * @method OrderDetail|$this shift(int $count = 1)
     * @method OrderDetail|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderDetail|$this pop(int $count = 1)
     * @method OrderDetail|null pull($key, \Closure $default = null)
     * @method OrderDetail|null last(callable $callback = null, \Closure $default = null)
     * @method OrderDetail|$this random(callable|int|null $number = null)
     * @method OrderDetail|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderDetail|null get($key, \Closure $default = null)
     * @method OrderDetail|null first(callable $callback = null, \Closure $default = null)
     * @method OrderDetail|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderDetail|null find($key, $default = null)
     * @method OrderDetail[] all()
     */
    class _IH_OrderDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderDetail_QB whereId($value)
     * @method _IH_OrderDetail_QB whereOrderid($value)
     * @method _IH_OrderDetail_QB whereProductid($value)
     * @method _IH_OrderDetail_QB whereQuantity($value)
     * @method _IH_OrderDetail_QB whereSaleprice($value)
     * @method _IH_OrderDetail_QB whereCreatedAt($value)
     * @method _IH_OrderDetail_QB whereUpdatedAt($value)
     * @method OrderDetail baseSole(array|string $columns = ['*'])
     * @method OrderDetail create(array $attributes = [])
     * @method _IH_OrderDetail_C|OrderDetail[] cursor()
     * @method OrderDetail|null|_IH_OrderDetail_C|OrderDetail[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderDetail_C|OrderDetail[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderDetail|_IH_OrderDetail_C|OrderDetail[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderDetail|_IH_OrderDetail_C|OrderDetail[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderDetail|_IH_OrderDetail_C|OrderDetail[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderDetail first(array|string $columns = ['*'])
     * @method OrderDetail firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderDetail firstOrFail(array|string $columns = ['*'])
     * @method OrderDetail firstOrNew(array $attributes = [], array $values = [])
     * @method OrderDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderDetail forceCreate(array $attributes)
     * @method _IH_OrderDetail_C|OrderDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderDetail_C|OrderDetail[] get(array|string $columns = ['*'])
     * @method OrderDetail getModel()
     * @method OrderDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderDetail_C|OrderDetail[] hydrate(array $items)
     * @method OrderDetail make(array $attributes = [])
     * @method OrderDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderDetail[]|_IH_OrderDetail_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderDetail[]|_IH_OrderDetail_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderDetail sole(array|string $columns = ['*'])
     * @method OrderDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderDetail_QB extends _BaseBuilder {}

    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, \Closure $default = null)
     * @method Order|null last(callable $callback = null, \Closure $default = null)
     * @method Order|$this random(callable|int|null $number = null)
     * @method Order|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Order|null get($key, \Closure $default = null)
     * @method Order|null first(callable $callback = null, \Closure $default = null)
     * @method Order|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Order|null find($key, $default = null)
     * @method Order[] all()
     */
    class _IH_Order_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Order[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Order_QB whereId($value)
     * @method _IH_Order_QB whereOrderdatetime($value)
     * @method _IH_Order_QB whereNote($value)
     * @method _IH_Order_QB whereCustomerid($value)
     * @method _IH_Order_QB whereStatus($value)
     * @method _IH_Order_QB whereCreatedAt($value)
     * @method _IH_Order_QB whereUpdatedAt($value)
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array|string $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array|string $columns = ['*'])
     * @method Order firstOrNew(array $attributes = [], array $values = [])
     * @method Order firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _IH_Order_C|Order[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Order_C|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] hydrate(array $items)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Order_QB extends _BaseBuilder {}

    /**
     * @method ProductSerial|null getOrPut($key, $value)
     * @method ProductSerial|$this shift(int $count = 1)
     * @method ProductSerial|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSerial|$this pop(int $count = 1)
     * @method ProductSerial|null pull($key, \Closure $default = null)
     * @method ProductSerial|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSerial|$this random(callable|int|null $number = null)
     * @method ProductSerial|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSerial|null get($key, \Closure $default = null)
     * @method ProductSerial|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSerial|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSerial|null find($key, $default = null)
     * @method ProductSerial[] all()
     */
    class _IH_ProductSerial_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSerial[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductSerial_QB whereId($value)
     * @method _IH_ProductSerial_QB whereProductid($value)
     * @method _IH_ProductSerial_QB whereSerial($value)
     * @method _IH_ProductSerial_QB whereStockquantity($value)
     * @method _IH_ProductSerial_QB whereCreatedAt($value)
     * @method _IH_ProductSerial_QB whereUpdatedAt($value)
     * @method ProductSerial baseSole(array|string $columns = ['*'])
     * @method ProductSerial create(array $attributes = [])
     * @method _IH_ProductSerial_C|ProductSerial[] cursor()
     * @method ProductSerial|null|_IH_ProductSerial_C|ProductSerial[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSerial_C|ProductSerial[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSerial|_IH_ProductSerial_C|ProductSerial[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSerial|_IH_ProductSerial_C|ProductSerial[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSerial|_IH_ProductSerial_C|ProductSerial[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSerial first(array|string $columns = ['*'])
     * @method ProductSerial firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSerial firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSerial firstOrFail(array|string $columns = ['*'])
     * @method ProductSerial firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSerial firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSerial forceCreate(array $attributes)
     * @method _IH_ProductSerial_C|ProductSerial[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSerial_C|ProductSerial[] get(array|string $columns = ['*'])
     * @method ProductSerial getModel()
     * @method ProductSerial[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSerial_C|ProductSerial[] hydrate(array $items)
     * @method ProductSerial make(array $attributes = [])
     * @method ProductSerial newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSerial[]|_IH_ProductSerial_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductSerial[]|_IH_ProductSerial_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSerial sole(array|string $columns = ['*'])
     * @method ProductSerial updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSerial_QB extends _BaseBuilder {}

    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, \Closure $default = null)
     * @method Product|null last(callable $callback = null, \Closure $default = null)
     * @method Product|$this random(callable|int|null $number = null)
     * @method Product|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Product|null get($key, \Closure $default = null)
     * @method Product|null first(callable $callback = null, \Closure $default = null)
     * @method Product|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereName($value)
     * @method _IH_Product_QB whereAvatar($value)
     * @method _IH_Product_QB whereDescription($value)
     * @method _IH_Product_QB whereSaleprice($value)
     * @method _IH_Product_QB whereWeight($value)
     * @method _IH_Product_QB whereStockquantity($value)
     * @method _IH_Product_QB whereCategoryid($value)
     * @method _IH_Product_QB whereStatus($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array|string $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array|string $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Product_QB extends _BaseBuilder {}

    /**
     * @method Supplier|null getOrPut($key, $value)
     * @method Supplier|$this shift(int $count = 1)
     * @method Supplier|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Supplier|$this pop(int $count = 1)
     * @method Supplier|null pull($key, \Closure $default = null)
     * @method Supplier|null last(callable $callback = null, \Closure $default = null)
     * @method Supplier|$this random(callable|int|null $number = null)
     * @method Supplier|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Supplier|null get($key, \Closure $default = null)
     * @method Supplier|null first(callable $callback = null, \Closure $default = null)
     * @method Supplier|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Supplier|null find($key, $default = null)
     * @method Supplier[] all()
     */
    class _IH_Supplier_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Supplier[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Supplier_QB whereId($value)
     * @method _IH_Supplier_QB whereName($value)
     * @method _IH_Supplier_QB whereAddress($value)
     * @method _IH_Supplier_QB wherePhonenumber($value)
     * @method _IH_Supplier_QB whereStatus($value)
     * @method _IH_Supplier_QB whereCreatedAt($value)
     * @method _IH_Supplier_QB whereUpdatedAt($value)
     * @method Supplier baseSole(array|string $columns = ['*'])
     * @method Supplier create(array $attributes = [])
     * @method _IH_Supplier_C|Supplier[] cursor()
     * @method Supplier|null|_IH_Supplier_C|Supplier[] find($id, array|string $columns = ['*'])
     * @method _IH_Supplier_C|Supplier[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Supplier|_IH_Supplier_C|Supplier[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Supplier|_IH_Supplier_C|Supplier[] findOrFail($id, array|string $columns = ['*'])
     * @method Supplier|_IH_Supplier_C|Supplier[] findOrNew($id, array|string $columns = ['*'])
     * @method Supplier first(array|string $columns = ['*'])
     * @method Supplier firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Supplier firstOrCreate(array $attributes = [], array $values = [])
     * @method Supplier firstOrFail(array|string $columns = ['*'])
     * @method Supplier firstOrNew(array $attributes = [], array $values = [])
     * @method Supplier firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Supplier forceCreate(array $attributes)
     * @method _IH_Supplier_C|Supplier[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Supplier_C|Supplier[] get(array|string $columns = ['*'])
     * @method Supplier getModel()
     * @method Supplier[] getModels(array|string $columns = ['*'])
     * @method _IH_Supplier_C|Supplier[] hydrate(array $items)
     * @method Supplier make(array $attributes = [])
     * @method Supplier newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Supplier[]|_IH_Supplier_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Supplier[]|_IH_Supplier_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Supplier sole(array|string $columns = ['*'])
     * @method Supplier updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Supplier_QB extends _BaseBuilder {}
}
