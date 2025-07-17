## Tao factory & model khi da co Model

#### Tạo Factory từ Model đã có
> php artisan make:factory TaskFactory --model=Task

#### Tạo Seeder từ Model đã có
> php artisan make:seeder TaskSeeder

#### Chạy Seeder (chay rieng 1 file)
> php artisan db:seed --class=TaskSeeder

#### Tạo Factory + Seeder cùng lúc (nếu muốn gọn)
> php artisan make:factory TaskFactory --model=Task && php artisan make:seeder TaskSeeder


php artisan make:factory TacGiaFactory --model=Task && php artisan make:seeder TacGiaSeeder

php artisan make:factory SachFactory --model=Task && php artisan make:seeder SachSeeder

php artisan make:factory ThanhVienFactory --model=Task && php artisan make:seeder ThanhVienSeeder

php artisan make:factory PhieuMuonFactory --model=Task && php artisan make:seeder PhieuMuonSeeder

#### Chay seed data nhieu file
> php artisan db:seed --class=TacGiaSeeder

> php artisan db:seed --class=SachSeeder

> php artisan db:seed --class=ThanhVienSeeder

> php artisan db:seed --class=PhieuMuonSeeder


## Route + Resource Controller
#### Tao controller trong
> php artisan make:controller UserController

####  Laravel sẽ tạo controller mẫu trong app/Http/Controllers/UserController.php với sẵn 7 method:
> CLI: php artisan make:controller SachController --resource

- 7 method:
> class SachController extends Controller
{
    public function index() {}    // ✅ GET /sach - Hiển thị danh sách
    public function create() {}   // ✅ GET /sach/create - Form tạo mới
    public function store(Request $request) {}  // ✅ POST /sach - Lưu mới
    public function show($id) {}  // ✅ GET /sach/{id} - Xem chi tiết
    public function edit($id) {}  // ✅ GET /sach/{id}/edit - Form chỉnh sửa
    public function update(Request $request, $id) {} // ✅ PUT/PATCH /sach/{id} - Cập nhật
    public function destroy($id) {} // ✅ DELETE /sach/{id} - Xóa
}



