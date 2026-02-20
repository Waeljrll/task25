<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
   public function home(){

    $posts = [
    [
        "title" => "5 عادات صباحية للإنتاجية",
        "content" => "1. صحي بدري 2. اشرب مية 3. حركة خفيفة 10 دقايق 4. فطار صحي 5. خطط يومك. الروتين بيصنع الفرق.",
        "views" => 1250
    ],
    [
        "title" => "باستا ألفريدو في 20 دقيقة",
        "content" => "مكونات: باستا، كريمة، جبنة بارميزان، ثوم، زبدة. اسلق الباستا، حضر الصوص في طاسة، اخلطهم مع بعض. سهلة ولذيذة!",
        "views" => 890
    ],
    [
        "title" => "فوايد المشي 30 دقيقة يومياً",
        "content" => "يحسن القلب، يحرق الوزن، يقلل التوتر، ويحسن النوم. مش محتاج جيم، ابدأ من عند باب بيتك.",
        "views" => 2100
    ],
    [
        "title" => "من الصفر لأول وظيفة برمجة",
        "content" => "تعلمت لوحدي HTML, CSS, JavaScript في 8 شهور. عملت مشاريع صغيرة وبنيت portfolio. الاستمرارية أهم من السرعة.",
        "views" => 3400
    ],
    [
        "title" => "أهم 3 أماكن في الأقصر",
        "content" => "معبد الكرنك، وادي الملوك، معبد حتشبسوت. احجز مرشد كويس وزر الصبح بدري.",
        "views" => 1560
    ],
    [
        "title" => "كيف توفر من مرتبك؟",
        "content" => "ادخر 20% أول ما يجيلك المرتب. سجل مصاريفك. قلل الأكل بره. حط هدف واضح للادخار.",
        "views" => 2800
    ]
];

    return view("home", compact('posts'));
}

    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}
