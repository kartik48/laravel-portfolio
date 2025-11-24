@extends('components.layout')

@section('title', 'About Me - My Portfolio')

@section('content')
    <div class="bg-white overflow-hidden">
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">About Me</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Passionate Developer & Problem Solver
                    </h3>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20 block h-42 w-42 text-gray-100" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                    <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="{{ asset('Subject.png') }}" alt="Portrait of me" width="1184" height="1376">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <p class="text-lg text-gray-500">
                            Hello! I'm a software developer with a passion for building scalable and user-friendly web applications. I have experience working with modern technologies like Laravel, Vue.js, React, and Tailwind CSS.
                        </p>
                    </div>
                    <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                        <p>
                            I started my coding journey 5 years ago and have been loving every minute of it. I enjoy solving complex problems and learning new things.
                        </p>
                        <h3 class="mt-12 text-2xl font-bold text-gray-900">Technical Skills</h3>
                        <ul role="list">
                            <li><strong>Languages:</strong> PHP, Python, JavaScript, SQL</li>
                            <li><strong>Frameworks:</strong> Laravel, Flask, RESTful APIs</li>
                            <li><strong>Cloud & DevOps:</strong> AWS (EC2, S3), Docker, Git</li>
                            <li><strong>Data:</strong> Power BI, Pandas, NumPy, Machine Learning Basics</li>
                            <li><strong>AI Tools:</strong> Antigravity, Claude, Lovable, Prompt-efficiency</li>
                            <li><strong>Tools:</strong> Jira, Postman, GitLab CI/CD, VS Code</li>
                            <li><strong>Other:</strong> Agile/Scrum, Unit Testing, Version Control</li>
                        </ul>
                        <h3 class="mt-12 text-2xl font-bold text-gray-900">Professional Experience</h3>
                        
                        <div class="mb-8">
                            <h4 class="text-lg font-bold text-gray-900">Software Developer / Technical Consultant</h4>
                            <p class="text-indigo-600">Industrial Metal Components — Jodhpur, India</p>
                            <p class="text-sm text-gray-500 mb-2">Mar 2020 – Jun 2022</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Modernised internal business systems by migrating legacy PHP applications into Laravel MVC, improving system reliability, maintainability, and reducing future development overhead.</li>
                                <li>Collaborated with operations, management, and production teams to understand workflow requirements and translate them into functional, data-driven software features.</li>
                                <li>Designed and optimised SQL queries, performed data cleaning and validation, and improved the accuracy of internal reporting used for inventory, production planning, and operational decision-making.</li>
                                <li>Troubleshot full-stack issues across APIs, authentication flows, database queries, and cloud-hosted environments, increasing system stability and reducing recurring errors.</li>
                                <li>Built reusable components, automated manual workflows, and implemented analytical insights that improved process efficiency across departments.</li>
                                <li>Supported the organisation’s cloud migration and remote-access setup during COVID-19, ensuring smooth adoption and uninterrupted operations.</li>
                                <li>Participated in Agile development cycles, documented technical workflows, and contributed to both feature development and system maintenance.</li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-lg font-bold text-gray-900">Web Application Developer</h4>
                            <p class="text-indigo-600">Sarga Technologies — Jodhpur, India</p>
                            <p class="text-sm text-gray-500 mb-2">Jul 2016 – May 2018</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Built and maintained client-facing web applications using Laravel, PHP, JavaScript, and SQL.</li>
                                <li>Redesigned legacy websites, improving scalability, responsiveness, and security.</li>
                                <li>Developed reusable components and plugins to accelerate future project delivery.</li>
                                <li>Collaborated with clients to understand business needs and implement effective technical solutions.</li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-lg font-bold text-gray-900">Customer Solutions Advisor</h4>
                            <p class="text-indigo-600">TPG Telecom — Australia</p>
                            <p class="text-sm text-gray-500 mb-2">Aug 2024 – Present</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Act as the first point of contact for customers, resolving product, billing, device, and connectivity issues with a customer-first mindset.</li>
                                <li>Provide troubleshooting support across mobile, broadband, and account services while guiding customers in using self-service digital tools.</li>
                                <li>Use product knowledge and technical understanding to deliver clear explanations of issues and solutions, improving customer confidence and satisfaction.</li>
                                <li>Adapt quickly to new technologies, processes, and product updates within a fast-paced retail and technical support environment.</li>
                                <li>Build strong rapport with customers, delivering service that balances problem-solving with commercial awareness.</li>
                            </ul>
                        </div>

                        <h3 class="mt-12 text-2xl font-bold text-gray-900">University & Leadership Experience</h3>

                        <div class="mb-8">
                            <h4 class="text-lg font-bold text-gray-900">Secretary & Vice Secretary</h4>
                            <p class="text-indigo-600">Griffith University Nakama Japan Society — 250+ Members</p>
                            <p class="text-sm text-gray-500 mb-2">Jun 2023 – Jul 2024</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Coordinated events, managed communications, and strengthened community engagement.</li>
                                <li>Supported executive decisions, budgeting, and team coordination.</li>
                            </ul>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-lg font-bold text-gray-900">Partnerships & Sponsorship Officer</h4>
                            <p class="text-indigo-600">Griffith Technology Association — 200+ Members</p>
                            <p class="text-sm text-gray-500 mb-2">Jul 2023 – Jul 2024</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Formed partnerships with industry organisations to support student opportunities.</li>
                                <li>Led sponsorship outreach, event planning, and strategic collaborations.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
