<?php

return [
    [
        'title' => "Kartik's Portfolio Website",
        'description' => "A personal portfolio website built with Laravel 11 and Tailwind CSS. This project showcases my skills, professional experience, and featured projects. It features a fully responsive design, database integration with SQLite for project management, and a clean, modern user interface built with Blade templates.",
        'thumbnail' => 'portfolio-project.png',
        'link' => 'https://github.com/kartik48/laravel-portfolio',
        'tags' => ['Laravel 11', 'Tailwind CSS', 'SQLite', 'Blade'],
        'category' => 'development'
    ],
    [
        'title' => "Sunita's Creations",
        'description' => "An e-commerce platform for authentic Warli and Rajasthani handicrafts, built with Laravel 12. Created as a gift for my mother to showcase her traditional art. Features include a Warli-inspired aesthetic, a full admin panel for product management, category browsing, and a tag-based filtering system.",
        'thumbnail' => 'sunitas-creation.png',
        'link' => 'https://github.com/kartik48/sunitas_creations',
        'tags' => ['Laravel 12', 'Tailwind CSS', 'E-commerce', 'Blade'],
        'category' => 'development'
    ],
    [
        'title' => "Crumbs & Co.",
        'description' => "A modern, responsive website for Crumbs & Co., an artisanal bakery based in Jodhpur, India. Features include an auto-scrolling product carousel, product categories showcase, contact page with Google Maps, and WhatsApp/Instagram integration for easy ordering.",
        'thumbnail' => 'crumbs-co.png',
        'link' => 'https://github.com/kartik48/crumbs-co',
        'tags' => ['Next.js 14', 'TypeScript', 'Tailwind CSS', 'Prisma', 'PostgreSQL'],
        'category' => 'development'
    ],

    // --- Data Projects ---
    [
        'title' => '🌊 Coastal Sense Monitor',
        'description' => "JB Pacific × Griffith University — Led as Project Manager on an industry-partnered AI safety system built for JB Pacific, Brisbane. The system combines a YOLOv4-based computer vision engine for real-time vessel and human detection near water bodies with a predictive traffic modelling layer — using historical movement data to anticipate waterway activity during flood seasons, enabling proactive safety alerts before incidents occur.\n\nManaged the full project lifecycle including team coordination, stakeholder liaison, scope management, and milestone delivery. Acted as primary client liaison, resolving scope changes and aligning deliverables with client expectations. Directed research, package selection, and the integration of the AI detection and predictive modelling pipelines into a unified system.",
        'thumbnail' => 'coastal_sense_detection.png',
        'link' => null,
        'tags' => ['Python', 'YOLOv4', 'Computer Vision', 'Predictive Modelling'],
        'category' => 'data'
    ],
    [
        'title' => '🎵 TWICE Social Media Analysis',
        'description' => "Griffith University — A comprehensive multi-platform social media study centred on K-pop group TWICE (트와이스), combining data from Twitter/X, Spotify, and YouTube to uncover fan behaviour patterns, community structure, and musical identity across platforms.\n\nThe analysis covered network community detection using Louvain and Girvan-Newman algorithms, music feature profiling across albums using Spotify energy and danceability metrics, and sentiment and emotional classification of over 10,000 tweets. All data collection, analysis, and visualisation was implemented entirely in R.",
        'thumbnail' => 'project_twice.png',
        'link' => null,
        'tags' => ['R', 'igraph', 'tidytext', 'Twitter API', 'Spotify API', 'YouTube API'],
        'category' => 'data'
    ],
    [
        'title' => '🌫️ Mining Air Quality Data for Pollution Analysis',
        'description' => "Griffith University — A comparative machine learning study investigating the relationships between key air pollutants — PM2.5, NO₂, O₃ — and environmental variables including temperature and absolute and relative humidity.\n\nThree regression algorithms (Linear Regression, SVR with multiple kernels, and XGBoost) were implemented in both Python and R, producing six parallel model implementations for direct cross-language comparison. Rigorous cross-validation, residual analysis, and feature importance evaluation were used to identify the optimal model, achieving a 15% improvement in correlation analysis accuracy through systematic hyperparameter tuning.",
        'thumbnail' => 'project_airquality.png',
        'link' => null,
        'tags' => ['Python', 'Scikit-learn', 'XGBoost', 'SVR', 'R', 'caret', 'ggplot2'],
        'category' => 'data'
    ],
    [
        'title' => '🔍 Forensic Fraud Detection',
        'description' => "Griffith University — A simulated AML (Anti-Money Laundering) compliance investigation conducted in the role of a financial intelligence analyst. The project involved forensic examination of a banking transaction dataset to surface anomalous behaviour, identify high-risk account holders, and build a structured evidence trail for investigative review.\n\nDesigned an end-to-end Tableau workbook with interactive dashboards for the investigation team — covering transaction volume analysis, risk distribution treemaps, and a flagged accounts detail view. Delivered a plain-language compliance report purpose-built for non-technical stakeholders, enabling them to act on findings without requiring data expertise.",
        'thumbnail' => 'project_fraud.png',
        'link' => null,
        'tags' => ['Tableau', 'Data Storytelling', 'AML Compliance', 'Anomaly Detection', 'Dashboard Design'],
        'category' => 'data'
    ],
];
