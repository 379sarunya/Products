<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    private $products = [
        // รายละเอียดของสินค้า 
        ['id' => 1, 'name' => 'Daisy by Katie-s Collective',
        
        // คำอธิบายสินค้า
        'description' => "เคสกระจกรองรับ Magsafe สำหรับ iPhone 16 Pro Max",
        
        // ราคาของสินค้า
        'price' => '1499',
        
        // รายการภาพของสินค้า
        'images' => [
            'https://cdn-image02.casetify.com/usr/8405/29948405/~v10/27729581_iphone12-pro-max_16002755__render8.png.560x560-r.m80.webp',
            'https://cdn-stamplib.casetify.com/cms/image/ee8d27f3cc0ee376260e3d7e67748a04.png',
            'https://cdn-stamplib.casetify.com/cms/image/2e7906c59e0c235a0db4c37e6885e815.png'
        ],
        
        // ภาพหลักที่แสดงสินค้า
        'image' => 'https://cdn-image02.casetify.com/usr/8405/29948405/~v10/27729581x2_iphone12-pro-max__color_silver_16002755.png.1000x1000-r.m80.webp'
    ],
    
        ['id' => 2, 'name' => 'Mon Cheri Cherries',

        'description' => "เคสกันกระแทก Bounce สำหรับ iPhone 16 Pro Max ", 

         'price' => '2899',

        'images' => [

         'https://cdn-image02.casetify.com/usr/21890/26571890/~v114/32566209_iphone-16-pro-max_16007149__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/77671aab16f4ef2e6b6dae0bd2d39e11.png',
         'https://cdn-stamplib.casetify.com/cms/image/0b3fb19873f23bfcb77882d3cde9f469.jpg'

        ],'image' =>'https://cdn-image02.casetify.com/usr/21890/26571890/~v114/32566209x2_iphone-16-pro-max__color_white-titanium_16007149.png.1000x1000-r.m80.webp'],

        ['id' => 3, 
        'name' => 'MEOW! MEOW! MEOW!',

        'description' => 'เคสกระจกรองรับ Magsafe สำหรับ iPhone 16 Pro Max ', 
        'price' => '2599',

        'images' => [

         'https://cdn-image02.casetify.com/usr/23298/32333298/~v1141/32582059_iphone-16-pro-max_16007270__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/3ed777852a0bbb1f792de961a8f109c4.png',
         'https://cdn-stamplib.casetify.com/cms/image/c47f5c4d71b53e1cbb3fa0f9825da9f0.jpg'
        ],
       
        'image' => 'https://cdn-image02.casetify.com/usr/23298/32333298/~v1141/32582059x2_iphone-16-pro-max__color_white-titanium_16007270.png.1000x1000-r.m80.webp'],

        ['id' => 4,
        'name' => 'Travel Lover by Nawara Studio',

        'description' => 'เคส Impact พร้อมห่วงตั้งรองรับ Magsafe สำหรับ iPhone 16 Pro Max ', 
        'price' => '3099',

        'images' => [

         'https://cdn-image02.casetify.com/usr/2692/14462692/~v3614/23273597_iphone-16-pro-max_16007207__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/58d9d86e359ebf49c269127a4c6c9394.png',
         'https://cdn-stamplib.casetify.com/cms/image/0ef15b7663c639158714c44a9d7b7f2a.jpg'
        ],
        
        'image' => 'https://cdn-image02.casetify.com/usr/2692/14462692/~v3614/23273597x2_iphone-16-pro-max__color_white-titanium_16007207.png.1000x1000-r.m80.webp'],

        ['id' => 5, 
        'name' => 'MONEY GET RICH BY BU2MA',

        'description' => "เคส Impact พร้อมห่วงตั้งรองรับ Magsafe สำหรับ iPhone 16 Pro Max ", 
        
        'price' => '3099',

        'images' => [

         'https://cdn-image02.casetify.com/usr/22815/23032815/~v114/31706119_iphone-16-pro-max_16007207__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/58d9d86e359ebf49c269127a4c6c9394.png',
         'https://cdn-stamplib.casetify.com/cms/image/0ef15b7663c639158714c44a9d7b7f2a.jpg'
        ],
        //
        'image' => 'https://cdn-image02.casetify.com/usr/22815/23032815/~v114/31706119x2_iphone-16-pro-max__color_white-titanium_16007207.png.1000x1000-r.m80.webp'],

        ['id' => 6, 
        'name' => 'PLZ DO NOT DISTURB ME',

        'description' => 'เคสกระจกรองรับ Magsafe สำหรับ iPhone 16 Pro Max ', 
        
        'price' => '2599',
        
        'images' => [

         'https://cdn-image02.casetify.com/usr/14315/17384315/~v4141/28644892_iphone-16-pro-max_16007270__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/3ed777852a0bbb1f792de961a8f109c4.png',
         'https://cdn-stamplib.casetify.com/cms/image/c47f5c4d71b53e1cbb3fa0f9825da9f0.jpg'
        ],
       
        'image' => 'https://cdn-image02.casetify.com/usr/14315/17384315/~v4141/28644892x2_iphone-16-pro-max__color_white-titanium_16007270.png.1000x1000-r.m80.webp'],

        ['id' => 7, 
        'name' => 'Gray Camo',

        'description' => "เคสกันกระแทกรองรับ Magsafe สำหรับ iPhone 16 Pro Max ", 
         
         'price' => '2599',
        
         'images' => [

         'https://cdn-image02.casetify.com/usr/4787/34787/~v114/32719449_iphone-16-pro-max_16007172__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/a394f50294f179c66d61bcaa5b096fac.png',
         'https://cdn-stamplib.casetify.com/cms/image/02d7cdd5b569817829c2d293c375dd93.jpg'
        ],
      
        'image' => 'https://cdn-image02.casetify.com/usr/4787/34787/~v114/32719449x2_iphone-16-pro-max__color_white-titanium_16007172.png.1000x1000-r.m80.webp'],

        ['id' => 8, 
        'name' => 'Mardi Mercredi Flower Red Case',

        'description' => 'เคสกันกระแทกรองรับ Magsafe สำหรับ iPhone 16 Pro Max ', 
        
        'price' => '2599',

        'images' => [

         'https://cdn-image02.casetify.com/usr/4787/34787/~v114/32773017_iphone-16-pro-max_16007169__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/26fe426668c0e6ab3e4212eb7c8207b5.png',
         'https://cdn-stamplib.casetify.com/cms/image/8f9632f93099550f1a83bcdeab9975c6.jpg'
        ],
        
        'image' => 'https://cdn-image02.casetify.com/usr/4787/34787/~v114/32773017x2_iphone-16-pro-max__color_white-titanium_16007169.png.1000x1000-r.m80.webp'],

        ['id' => 9, 
        'name' => 'Joguman Studio Galaxy',

        'description' => "เคส Ultra Bounce รองรับ MagSafe สำหรับ iPhone 16 Pro Max ", 
        
        'price' => '3599',
        
        'images' => [
         'https://cdn-image02.casetify.com/usr/9860/22389860/~v1141/29681825_iphone-16-pro-max_16007136__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/d8429ca860fc050b94544ffc2f86cdc5.png',
         'https://cdn-stamplib.casetify.com/cms/image/acb42e122464fddc812b8f4bd5fac122.jpg'
        ],
      
        'image' => 'https://cdn-image02.casetify.com/usr/9860/22389860/~v1141/29681825x2_iphone-16-pro-max__color_white-titanium_16007136.png.1000x1000-r.m80.webp'],

        ['id' => 10, 
        'name' => 'The King of Cats',

        'description' => 'เคสกันกระแทก Bounce สำหรับ iPhone 16 Pro Max ', 
        'price' => '2899',

        'images' => [
         'https://cdn-image02.casetify.com/usr/14566/19184566/~v6214/19347221_iphone-16-pro-max_16007149__render888.png.560x560-r.m80.webp',
         'https://cdn-stamplib.casetify.com/cms/image/77671aab16f4ef2e6b6dae0bd2d39e11.png',
         'https://cdn-stamplib.casetify.com/cms/image/0b3fb19873f23bfcb77882d3cde9f469.jpg'
        ],
        
        'image' => 'https://cdn-image02.casetify.com/usr/14566/19184566/~v6214/19347221x2_iphone-16-pro-max__color_white-titanium_16007149.png.1000x1000-r.m80.webp'],

        
        ];

    /**
     * Display a listing of the resource.
     */
    public function index() // ฟังก์ชัน index ที่จะถูกเรียกเมื่อผู้ใช้เข้าไปที่หน้าแสดงรายการสินค้า
    {
        return Inertia::render('Products/Index', ['products' => $this->products]); // ใช้ Inertia เพื่อ render view 'Products/Index' พร้อมส่งข้อมูลสินค้าไปยังไฟล์ Index.jsx
        // ส่งข้อมูลไปที่ตัวแปร products ในไฟล์ Index.jsx
    }

    public function create() // ฟังก์ชัน create ที่ใช้ในการแสดงฟอร์มสำหรับการสร้างสินค้ารายการใหม่
    {
        //
    }

 
    public function store(Request $request) // ฟังก์ชัน store ที่ใช้สำหรับรับข้อมูลจากฟอร์มสร้างสินค้าและบันทึกลงฐานข้อมูล
    {
        //
    }


    public function show($id) // ฟังก์ชัน show ที่แสดงรายละเอียดของสินค้าแต่ละชิ้น
    {   
        $product = collect($this->products)->firstWhere('id', $id); // ค้นหาสินค้าที่มี id ตรงกับที่ได้รับจากพารามิเตอร์

        if (!$product) { // หากไม่พบสินค้า
            abort(404, 'Product not found'); // แสดงข้อผิดพลาด 404
        }
        return Inertia::render('Products/Show', ['product' => $product]); // ใช้ Inertia ในการ render หน้าแสดงรายละเอียดสินค้า
        // ส่งข้อมูลไปที่ตัวแปร product ในไฟล์ Show.jsx
    }

    public function edit(string $id) // ฟังก์ชัน edit ที่ใช้ในการแสดงฟอร์มแก้ไขข้อมูลสินค้า
    {
        //
    }

    public function update(Request $request, string $id) // ฟังก์ชัน update ที่ใช้ในการอัพเดตข้อมูลสินค้าตามที่ผู้ใช้ระบุ
    {
        //
    }

    public function destroy(string $id) // ฟังก์ชัน destroy ที่ใช้ในการลบสินค้าจากฐานข้อมูล
    {
        //
    }
} 