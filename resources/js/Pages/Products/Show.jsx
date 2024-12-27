import { useState } from "react"; // นำเข้า useState hook จาก React เพื่อใช้ในการจัดการ state
import { Link } from "@inertiajs/react"; // นำเข้า Link จาก @inertiajs/react ใช้ในการเชื่อมโยงหน้าเว็บ

export default function Show({ product }) {  // นิยามฟังก์ชัน Show รับ prop ที่ชื่อ product
  const [currentImageIndex, setCurrentImageIndex] = useState(0); // สร้าง state ชื่อ currentImageIndex เพื่อเก็บ index ของภาพที่แสดง

  const handlePrevious = () => { // ฟังก์ชันที่ใช้ในการย้ายไปยังภาพก่อนหน้า
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === 0 ? product.images.length - 1 : prevIndex - 1) // ถ้าอยู่ที่ภาพแรกจะไปที่ภาพสุดท้าย
    );
  };

  const handleNext = () => { // ฟังก์ชันที่ใช้ในการย้ายไปยังภาพถัดไป
    setCurrentImageIndex(
      (prevIndex) => (prevIndex === product.images.length - 1 ? 0 : prevIndex + 1) // ถ้าอยู่ที่ภาพสุดท้ายจะไปที่ภาพแรก
    );
  };

  return (
    <div className="bg-[#F1E8FD] min-h-screen flex justify-center items-center px-4"> {/* ใช้ flex เพื่อจัดทุกอย่างให้อยู่ตรงกลางทั้งแนวนอนและแนวตั้ง */}
      <div className="w-full max-w-7xl space-y-6 bg-[#D1C4E9] rounded-lg"> {/* เพิ่ม background-color ที่แตกต่างจากพื้นหลัง */}
        
        <div className="text-center sm:py-4 pb-6"> {/* เพิ่ม padding ที่ด้านล่างของ header */}
          <h1 className="text-4xl font-extrabold text-brown-800 font-serif">Product Details</h1>{/* แสดงชื่อหัวข้อ */}
        </div>

        {/* Two-column layout */}
        <div className="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-8 justify-center items-center"> {/* ใช้ grid เพื่อจัดคอลัมน์ให้อยู่ในตำแหน่งที่เหมาะสม */}
          {/* Left column - Product images with carousel */}
          <div className="flex flex-col items-center p-6"> {/* เพิ่ม padding ที่นี่ */}
            <div className="relative w-full max-w-md"> {/* กำหนดให้คอลัมน์มีความกว้างเต็มที่และมีขนาดสูงสุด */}
              {/* Main Image */}
              <img
                src={product.images[currentImageIndex]} // ใช้ currentImageIndex เพื่อแสดงภาพตามลำดับ
                className="rounded-lg object-cover max-h-[500px] w-full" // กำหนดสไตล์ของภาพ
                alt={`${product.name} - image ${currentImageIndex + 1}`} // แสดงคำบรรยายภาพ
              />

              {/* Navigation Buttons */}
              <button
                onClick={handlePrevious} // เมื่อคลิกจะเรียกใช้ฟังก์ชัน handlePrevious
                className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#B19CD8] p-2 rounded-full shadow-lg hover:bg-[#9E88B0]" // ปุ่มย้อนกลับ
              >
                ❮
              </button>
              <button
                onClick={handleNext} // เมื่อคลิกจะเรียกใช้ฟังก์ชัน handleNext
                className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#B19CD8] p-2 rounded-full shadow-lg hover:bg-[#9E88B0]" // ปุ่มถัดไป
              >
                ❯
              </button>
            </div>

            {/* Thumbnail Images */}
            <div className="flex gap-2 mt-4"> {/* การแสดงภาพย่อยในแนวนอน */}
              {product.images.map((image, index) => ( // วนลูปเพื่อแสดงภาพย่อย
                <img
                  key={index} // ใช้ index เป็นคีย์สำหรับแต่ละภาพ
                  src={image} // ใช้ image จาก product.images
                  alt={`Thumbnail ${index + 1}`} // คำบรรยายภาพย่อย
                  onClick={() => setCurrentImageIndex(index)} // เมื่อคลิกจะเปลี่ยนภาพหลักเป็นภาพย่อยที่คลิก
                  className={`h-16 w-16 rounded-lg object-cover cursor-pointer ${
                    currentImageIndex === index
                      ? "ring-2 ring-purple-400" // ถ้าภาพย่อยที่คลิกตรงกับภาพหลักจะเพิ่มกรอบสีม่วงเข้ม
                      : "ring-1 ring-purple-200" // ถ้าไม่ตรงจะมีกรอบสีม่วงอ่อน
                  }`}
                />
              ))}
            </div>
          </div>

          {/* Right column - Product info */}
          <div className="flex flex-col justify-center p-6"> {/* เพิ่ม padding ที่นี่ */}
            <div>
              <h1 className="text-2xl font-bold tracking-tight text-gray-600 sm:text-3xl">
                {product.name} {/* แสดงชื่อผลิตภัณฑ์ */}
              </h1>
              <p className="mt-4 text-base text-gray-700">{product.description}</p> {/* แสดงคำอธิบายผลิตภัณฑ์ */}
            </div>

            <div className="mt-6">
              <p className="text-2xl font-bold tracking-tight text-black-500">฿{product.price}</p> {/* แสดงราคา */}
              
              <div className="mt-6">
                <Link
                  href="/products" // ลิงค์กลับไปยังหน้าผลิตภัณฑ์ทั้งหมด
                  className="mt-4 text-sm font-medium text-white bg-[#B19CD8] px-4 py-2 hover:bg-[#9E88B0] rounded-md"
                >
                  Back 
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
