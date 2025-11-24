<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtexHub - Contemporary Women's Fashion & Style</title>
    <meta name="description" content="Discover unique women's clothing at ArtexHub. From casual wear to elegant pieces, find your perfect style with our curated collection. Click here to continue exploring our fashion-forward designs and timeless classics.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-x7k9 {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo-brand-q8w5 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #e74c3c;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link-b9n1:hover {
            color: #e74c3c;
        }

        .hero-section-z5x8 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero-content-f2j6 {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title-k4l9 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .hero-subtitle-v7c3 {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-h8m4 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-h8m4:hover {
            background: #c0392b;
        }

        .about-section-p9q2 {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-w6e1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-n3r5 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-s7t4 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text-u2y8 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-d5k7 {
            text-align: center;
        }

        .collections-section-a9b3 {
            padding: 80px 0;
            background: white;
        }

        .collections-grid-x1z6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .collection-card-m8p4 {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .collection-card-m8p4:hover {
            transform: translateY(-5px);
        }

        .card-image-l3n9 {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-content-r6w2 {
            padding: 1.5rem;
        }

        .card-title-j4h7 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .history-section-v8c5 {
            padding: 80px 0;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .history-timeline-q2x9 {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-k7l4 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .timeline-year-f9n6 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .reviews-section-t5y3 {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .reviews-grid-b1m8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-z4p7 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .review-stars-w9e2 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-h6k3 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-s2l9 {
            font-weight: bold;
            color: #2c3e50;
        }

        .sustainability-section-g8r4 {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .sustainability-content-x3v7 {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .sustainability-grid-n5q1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .sustainability-item-j7w8 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .footer-main-d4k6 {
            background: #2c3e50;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid-p8m3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section-l9x2 h3 {
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .footer-link-r5t8 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer-link-r5t8:hover {
            color: white;
        }

        .phone-link-w7q4 {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-bottom-u6n1 {
            border-top: 1px solid #34495e;
            padding-top: 2rem;
            text-align: center;
            color: #bdc3c7;
        }

        .popup-overlay-z9k5 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .popup-content-m2h7 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .popup-close-f4j8 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .popup-close-f4j8:hover {
            color: #333;
        }

        .style-guide-section-c7v9 {
            padding: 80px 0;
            background: white;
        }

        .style-tips-grid-y3k8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .style-tip-card-q6l2 {
            border: 2px solid #e74c3c;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
        }

        .care-section-h9p5 {
            padding: 80px 0;
            background: #ecf0f1;
        }

        .care-grid-x4w7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .care-item-n8r3 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-k4l9 {
                font-size: 2rem;
            }
            
            .about-grid-s7t4 {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .nav-wrapper-m4p2 {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>
    
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <div class="logo-brand-q8w5">ArtexHub</div>
            <ul class="nav-menu-r3t7">
                <li><a href="#about" class="nav-link-b9n1">About Us</a></li>
                <li><a href="#collections" class="nav-link-b9n1">Collections</a></li>
                <li><a href="#history" class="nav-link-b9n1">Our Story</a></li>
                <li><a href="#reviews" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#sustainability" class="nav-link-b9n1">Sustainability</a></li>
                <li><a href="#style-guide" class="nav-link-b9n1">Style Guide</a></li>
                <li><a href="#care" class="nav-link-b9n1">Care Tips</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section-z5x8">
        <div class="hero-content-f2j6">
            <h1 class="hero-title-k4l9">Welcome to ArtexHub</h1>
            <p class="hero-subtitle-v7c3">Discover contemporary women's fashion that celebrates individuality and comfort. Our carefully curated collection features versatile pieces perfect for every occasion.</p>
            <a href="#collections" class="cta-button-h8m4">Click Here to Continue Shopping</a>
        </div>
    </section>

    <section id="about" class="about-section-p9q2">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">About ArtexHub</h2>
            <div class="about-grid-s7t4">
                <div class="about-text-u2y8">
                    <p>At ArtexHub, we believe that fashion should be accessible, comfortable, and expressive. Founded with a passion for creating beautiful clothing that empowers women, we focus on quality craftsmanship and timeless designs.</p>
                    <br>
                    <p>Our team works tirelessly to bring you pieces that seamlessly blend style with functionality. From everyday essentials to statement pieces, every item in our collection is chosen with care and attention to detail.</p>
                    <br>
                    <a href="#collections" class="cta-button-h8m4">Click Here to Continue Exploring</a>
                </div>
                <div class="about-image-d5k7">
                    <img src="https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg" alt="Fashion Design Studio" style="width: 100%; border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    <section id="collections" class="collections-section-a9b3">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">Our Collections</h2>
            <div class="collections-grid-x1z6">
                <div class="collection-card-m8p4">
                    <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg" alt="Casual Wear Collection" class="card-image-l3n9">
                    <div class="card-content-r6w2">
                        <h3 class="card-title-j4h7">Everyday Essentials</h3>
                        <p>Comfortable and versatile pieces perfect for daily wear. From soft cotton tees to relaxed-fit jeans, find your go-to favorites.</p>
                    </div>
                </div>
                <div class="collection-card-m8p4">
                    <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Professional Wear" class="card-image-l3n9">
                    <div class="card-content-r6w2">
                        <h3 class="card-title-j4h7">Professional Collection</h3>
                        <p>Sophisticated pieces that make a statement in the workplace. Tailored blazers, elegant blouses, and polished accessories.</p>
                    </div>
                </div>
                <div class="collection-card-m8p4">
                    <img src="https://images.pexels.com/photos/1381556/pexels-photo-1381556.jpeg" alt="Evening Wear" class="card-image-l3n9">
                    <div class="card-content-r6w2">
                        <h3 class="card-title-j4h7">Evening Elegance</h3>
                        <p>Beautiful dresses and coordinated sets for special occasions. Celebrate life's moments with confidence and style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-v8c5">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">Our Journey</h2>
            <div class="history-timeline-q2x9">
                <div class="timeline-item-k7l4">
                    <div class="timeline-year-f9n6">2018</div>
                    <p>ArtexHub was founded by Sarah Martinez in her small studio apartment. With just a sewing machine and a dream, she began creating custom pieces for friends and family.</p>
                </div>
                <div class="timeline-item-k7l4">
                    <div class="timeline-year-f9n6">2019</div>
                    <p>Opened our first pop-up shop in downtown Portland. The response was overwhelming, and we knew we were onto something special.</p>
                </div>
                <div class="timeline-item-k7l4">
                    <div class="timeline-year-f9n6">2021</div>
                    <p>Launched our online platform and expanded our team to include talented designers from around the world. Our commitment to quality remained unchanged.</p>
                </div>
                <div class="timeline-item-k7l4">
                    <div class="timeline-year-f9n6">2024</div>
                    <p>Today, ArtexHub serves thousands of women globally, maintaining our core values of quality, comfort, and individual expression.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-t5y3">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">What Our Customers Say</h2>
            <div class="reviews-grid-b1m8">
                <div class="review-card-z4p7">
                    <div class="review-stars-w9e2">★★★★★</div>
                    <p class="review-text-h6k3">"I absolutely love my purchases from ArtexHub! The quality is exceptional and the fit is perfect. These pieces have become staples in my wardrobe."</p>
                    <div class="review-author-s2l9">- Emma Thompson</div>
                </div>
                <div class="review-card-z4p7">
                    <div class="review-stars-w9e2">★★★★★</div>
                    <p class="review-text-h6k3">"Finally found a brand that understands what women actually want to wear. Comfortable, stylish, and well-made. Highly recommend!"</p>
                    <div class="review-author-s2l9">- Maria Rodriguez</div>
                </div>
                <div class="review-card-z4p7">
                    <div class="review-stars-w9e2">★★★★★</div>
                    <p class="review-text-h6k3">"The customer service is outstanding and the clothes are even better in person. ArtexHub has earned a loyal customer for life."</p>
                    <div class="review-author-s2l9">- Jennifer Chen</div>
                </div>
            </div>
        </div>
    </section>

    <section id="sustainability" class="sustainability-section-g8r4">
        <div class="container-w6e1">
            <div class="sustainability-content-x3v7">
                <h2 class="section-title-n3r5">Our Commitment to Sustainability</h2>
                <p>We believe fashion should be beautiful without compromising our planet's future. That's why we're committed to sustainable practices throughout our entire process.</p>
                <a href="#care" class="cta-button-h8m4">Click Here to Continue Learning</a>
            </div>
            <div class="sustainability-grid-n5q1">
                <div class="sustainability-item-j7w8">
                    <h3>Eco-Friendly Materials</h3>
                    <p>We source organic cotton, recycled polyester, and other sustainable fabrics whenever possible.</p>
                </div>
                <div class="sustainability-item-j7w8">
                    <h3>Ethical Production</h3>
                    <p>All our manufacturing partners meet strict ethical standards and provide fair working conditions.</p>
                </div>
                <div class="sustainability-item-j7w8">
                    <h3>Minimal Packaging</h3>
                    <p>Our packaging is recyclable and designed to minimize environmental impact while protecting your items.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="style-guide" class="style-guide-section-c7v9">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">Style Guide & Tips</h2>
            <div class="style-tips-grid-y3k8">
                <div class="style-tip-card-q6l2">
                    <h3>Mixing Patterns</h3>
                    <p>Don't be afraid to mix different patterns! Start with one bold pattern and pair it with a subtle one in similar colors.</p>
                </div>
                <div class="style-tip-card-q6l2">
                    <h3>Layering Basics</h3>
                    <p>Master the art of layering by starting with fitted pieces and adding looser items on top. This creates depth and visual interest.</p>
                </div>
                <div class="style-tip-card-q6l2">
                    <h3>Color Coordination</h3>
                    <p>Build your wardrobe around a few key colors that work well together. This makes mixing and matching effortless.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="care" class="care-section-h9p5">
        <div class="container-w6e1">
            <h2 class="section-title-n3r5">Garment Care Instructions</h2>
            <div class="care-grid-x4w7">
                <div class="care-item-n8r3">
                    <h3>Washing Guidelines</h3>
                    <p>Always check care labels before washing. Use cold water when possible to preserve colors and prevent shrinking.</p>
                </div>
                <div class="care-item-n8r3">
                    <h3>Drying Tips</h3>
                    <p>Air dry delicate items and avoid direct sunlight. Use low heat settings for machine drying to maintain fabric integrity.</p>
                </div>
                <div class="care-item-n8r3">
                    <h3>Storage Solutions</h3>
                    <p>Hang structured pieces and fold knitwear. Use cedar blocks or lavender sachets to keep your clothes fresh naturally.</p>
                </div>
                <div class="care-item-n8r3">
                    <h3>Stain Removal</h3>
                    <p>Treat stains immediately with cold water. For stubborn stains, consult a professional cleaner to avoid damage.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="#about" class="cta-button-h8m4">Click Here to Continue Reading</a>
            </div>
        </div>
    </section>

    <footer class="footer-main-d4k6">
        <div class="container-w6e1">
            <div class="footer-grid-p8m3">
                <div class="footer-section-l9x2">
                    <h3>Contact Information</h3>
                    <p>ArtexHub Fashion Studio</p>
                    <p>1247 Creative Boulevard</p>
                    <p>Portland, OR 97205</p>
                    <p>Phone: <a href="tel:+15039847621" class="phone-link-w7q4">+1 (503) 984-7621</a></p>
                    <p>Email: hello@artexhub.com</p>
                </div>
                <div class="footer-section-l9x2">
                    <h3>Customer Service</h3>
                    <a href="#" class="footer-link-r5t8" onclick="showPopup('terms')">Terms of Service</a>
                    <a href="#" class="footer-link-r5t8" onclick="showPopup('privacy')">Privacy Policy</a>
                    <a href="#" class="footer-link-r5t8">Size Guide</a>
                    <a href="#" class="footer-link-r5t8">Return Policy</a>
                    <a href="#" class="footer-link-r5t8">Shipping Information</a>
                </div>
                <div class="footer-section-l9x2">
                    <h3>Quick Links</h3>
                    <a href="#about" class="footer-link-r5t8">About Us</a>
                    <a href="#collections" class="footer-link-r5t8">Collections</a>
                    <a href="#sustainability" class="footer-link-r5t8">Sustainability</a>
                    <a href="#style-guide" class="footer-link-r5t8">Style Guide</a>
                    <a href="#care" class="footer-link-r5t8">Care Instructions</a>
                </div>
                <div class="footer-section-l9x2">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p>Saturday: 10:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                    <p>Customer Service available 24/7 online</p>
                </div>
            </div>
            <div class="footer-bottom-u6n1">
                <p>© 2024 ArtexHub. All rights reserved. | Designed with passion for fashion-forward women.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Popup -->
    <div id="privacy-popup" class="popup-overlay-z9k5">
        <div class="popup-content-m2h7">
            <span class="popup-close-f4j8" onclick="hidePopup('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: December 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, and communicate with you.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at privacy@artexhub.com or call <a href="tel:+15039847621" class="phone-link-w7q4">+1 (503) 984-7621</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Popup -->
    <div id="terms-popup" class="popup-overlay-z9k5">
        <div class="popup-content-m2h7">
            <span class="popup-close-f4j8" onclick="hidePopup('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: December 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using ArtexHub's website and services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily download one copy of the materials on ArtexHub's website for personal, non-commercial transitory viewing only.</p>
            
            <h3>Disclaimer</h3>
            <p>The materials on ArtexHub's website are provided on an 'as is' basis. ArtexHub makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
            
            <h3>Limitations</h3>
            <p>In no event shall ArtexHub or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on ArtexHub's website.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at legal@artexhub.com or <a href="tel:+15039847621" class="phone-link-w7q4">+1 (503) 984-7621</a>.</p>
        </div>
    </div>

    <script>
        function showPopup(type) {
            document.getElementById(type + '-popup').style.display = 'block';
        }

        function hidePopup(type) {
            document.getElementById(type + '-popup').style.display = 'none';
        }

        // Close popup when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('popup-overlay-z9k5')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                                        target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(255, 255, 255, 0.95)';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.background = '#fff';
                nav.style.backdropFilter = 'none';
            }
        });

        // Simple form validation for contact
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add loading state for buttons
        document.querySelectorAll('.cta-button-h8m4').forEach(button => {
            button.addEventListener('click', function(e) {
                if (this.getAttribute('href') && this.getAttribute('href').startsWith('#')) {
                    return; // Allow normal anchor behavior
                }
                
                const originalText = this.textContent;
                this.textContent = 'Loading...';
                this.style.opacity = '0.7';
                
                setTimeout(() => {
                    this.textContent = originalText;
                    this.style.opacity = '1';
                }, 1000);
            });
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.collection-card-m8p4, .review-card-z4p7, .timeline-item-k7l4').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add dynamic year to footer
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const footerText = document.querySelector('.footer-bottom-u6n1 p');
            if (footerText) {
                footerText.innerHTML = footerText.innerHTML.replace('2024', currentYear);
            }
        });

        // Simple analytics tracking (placeholder)
        function trackEvent(eventName, eventData) {
            console.log('Event tracked:', eventName, eventData);
            // This would integrate with actual analytics service
        }

        // Track CTA clicks
        document.querySelectorAll('.cta-button-h8m4').forEach(button => {
            button.addEventListener('click', function() {
                trackEvent('cta_click', {
                    button_text: this.textContent,
                    page_section: this.closest('section')?.id || 'unknown'
                });
            });
        });

        // Track navigation clicks
        document.querySelectorAll('.nav-link-b9n1').forEach(link => {
            link.addEventListener('click', function() {
                trackEvent('nav_click', {
                    link_text: this.textContent,
                    target_section: this.getAttribute('href')
                });
            });
        });

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                // Close any open popups
                document.querySelectorAll('.popup-overlay-z9k5').forEach(popup => {
                    popup.style.display = 'none';
                });
            }
        });

        // Add focus management for accessibility
        document.querySelectorAll('.popup-close-f4j8').forEach(closeBtn => {
            closeBtn.addEventListener('click', function() {
                // Return focus to the element that opened the popup
                const triggerElement = document.activeElement;
                if (triggerElement) {
                    triggerElement.focus();
                }
            });
        });

        // Simple image lazy loading fallback
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.background = '#f0f0f0';
                this.style.display = 'flex';
                this.style.alignItems = 'center';
                this.style.justifyContent = 'center';
                this.innerHTML = '<span style="color: #999;">Image Loading...</span>';
            });
        });

        // Add mobile menu toggle functionality
        function createMobileMenu() {
            if (window.innerWidth <= 768) {
                const nav = document.querySelector('.nav-menu-r3t7');
                const navWrapper = document.querySelector('.nav-wrapper-m4p2');
                
                if (!document.querySelector('.mobile-menu-toggle-x9z2')) {
                    const toggleBtn = document.createElement('button');
                    toggleBtn.className = 'mobile-menu-toggle-x9z2';
                    toggleBtn.innerHTML = '☰';
                    toggleBtn.style.cssText = `
                        background: none;
                        border: none;
                        font-size: 1.5rem;
                        cursor: pointer;
                        color: #333;
                        display: block;
                    `;
                    
                    toggleBtn.addEventListener('click', function() {
                        nav.style.display = nav.style.display === 'none' ? 'flex' : 'none';
                    });
                    
                    navWrapper.appendChild(toggleBtn);
                    nav.style.display = 'none';
                }
            }
        }

        // Initialize mobile menu on load and resize
        window.addEventListener('load', createMobileMenu);
        window.addEventListener('resize', createMobileMenu);

        // Add scroll-to-top functionality
        const scrollToTopBtn = document.createElement('button');
        scrollToTopBtn.innerHTML = '↑';
        scrollToTopBtn.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            display: none;
            z-index: 1000;
            transition: opacity 0.3s;
        `;

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        document.body.appendChild(scrollToTopBtn);

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        });

        // Add simple search functionality (placeholder)
        function addSearchFeature() {
            const searchContainer = document.createElement('div');
            searchContainer.style.cssText = `
                position: relative;
                display: inline-block;
                margin-left: 1rem;
            `;

            const searchInput = document.createElement('input');
            searchInput.type = 'text';
            searchInput.placeholder = 'Search...';
            searchInput.style.cssText = `
                padding: 0.5rem;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 0.9rem;
            `;

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                // Simple search implementation
                if (searchTerm.length > 2) {
                    console.log('Searching for:', searchTerm);
                    // This would integrate with actual search functionality
                }
            });

            searchContainer.appendChild(searchInput);
            
            const navMenu = document.querySelector('.nav-menu-r3t7');
            if (navMenu && window.innerWidth > 768) {
                navMenu.appendChild(searchContainer);
            }
        }

        // Initialize search on larger screens
        if (window.innerWidth > 768) {
            addSearchFeature();
        }

        // Add newsletter signup functionality (placeholder)
        function createNewsletterSignup() {
            const newsletterSection = document.createElement('section');
            newsletterSection.style.cssText = `
                background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
                color: white;
                padding: 60px 0;
                text-align: center;
            `;

            newsletterSection.innerHTML = `
                <div class="container-w6e1">
                    <h2 style="margin-bottom: 1rem;">Stay Updated</h2>
                    <p style="margin-bottom: 2rem; font-size: 1.1rem;">Subscribe to our newsletter for the latest fashion tips and exclusive offers.</p>
                    <div style="max-width: 400px; margin: 0 auto; display: flex; gap: 1rem;">
                        <input type="email" placeholder="Enter your email" style="flex: 1; padding: 1rem; border: none; border-radius: 5px;">
                        <button class="cta-button-h8m4" style="background: #e74c3c;">Subscribe</button>
                    </div>
                </div>
            `;

            // Insert before footer
            const footer = document.querySelector('.footer-main-d4k6');
            footer.parentNode.insertBefore(newsletterSection, footer);
        }

        // Add newsletter section
        createNewsletterSignup();

        // Performance optimization: Defer non-critical operations
        setTimeout(function() {
            // Add any non-critical functionality here
            console.log('ArtexHub website fully loaded and optimized');
        }, 100);

    </script>
</body>
</html>


