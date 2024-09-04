const obj1 = {
    name : "PpLarry",
    age :  21,
    tel : "999-999-999"
};

const obj2 = {
    name : "PpLarry",
    age : 21,
    tel : "999-999-999"
}

const matches = (obj, source) =>
    Object.keys(source).every(Key => obj.hasOwnProperty(Key) && obj[Key] === source[Key]);

console.log(matches(obj1,obj2));

/*
    *ฟังก์ชันนี้รับพารามิเตอร์สองตัว คือ obj (ออบเจ็กต์ที่ต้องการตรวจสอบ) และ source (ออบเจ็กต์ที่เป็นแหล่งข้อมูล)
    *ฟังก์ชันนี้ใช้ Object.keys(source) เพื่อดึงคีย์ทั้งหมดจาก source ออกมาเป็นอาเรย์ จากนั้นใช้ .every() เพื่อวนลูปตรวจสอบทุกคีย์ในอาเรย์นั้น
    
    ?ภายใน .every():
        *obj.hasOwnProperty(Key) ตรวจสอบว่า obj มีคีย์ที่ตรงกับคีย์ใน source หรือไม่
        *obj[Key] === source[Key] ตรวจสอบว่าค่าของคีย์ใน obj ตรงกับค่าของคีย์ใน source หรือไม่
        *ถ้าคีย์และค่าทุกตัวตรงกันทั้งหมด ฟังก์ชันจะคืนค่าเป็น true แต่ถ้ามีคีย์หรือค่าตัวใดไม่ตรงกัน จะคืนค่าเป็น false
 */
