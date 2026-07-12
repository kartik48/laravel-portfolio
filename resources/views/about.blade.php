@extends('components.layout')

@section('title', 'About Me - My Portfolio')

@section('content')
    <div class="bg-black min-h-screen">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

            <!-- Header Section -->
            <div class="text-center mb-16">
                <p class="font-display text-xl text-gray-500 mb-1">&gt; cat about.txt</p>
                <h1 class="font-display text-5xl sm:text-6xl tracking-wide text-gray-100">
                    About <span class="text-red-500">Me</span>
                </h1>
                <p class="mt-4 text-xl text-red-400 font-bold">
                    Analyst &amp; Engineer, Working Across Data and AI
                </p>
            </div>

            <!-- Introduction Section -->
            <div class="mb-20">
                <div class="bg-neutral-900 border-2 border-gray-700 p-8 max-w-4xl mx-auto">
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Hello! I'm an analyst and engineer with a background spanning data analysis, business analysis, and web development. I've worked with Laravel, Python, SQL, and more recently AI agents, and I'm currently focused on using AI across development, analysis, and building data pipelines.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed mt-4">
                        I started building software 5 years ago and have gradually moved toward data and AI along the way. I enjoy solving practical problems and picking up new tools as the work calls for them.
                    </p>
                </div>
            </div>

            <!-- Technical Skills Section -->
            <div class="mb-20">
                <h2 class="font-display text-3xl tracking-wide text-gray-100 mb-8">&gt; Technical Skills</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Languages -->
                    <div class="bg-neutral-900 border-2 border-gray-700 p-6">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                            </svg>
                            Languages
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[PHP]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Python]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[JavaScript]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Java]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[SQL]</span>
                        </div>
                    </div>

                    <!-- Frameworks -->
                    <div class="bg-neutral-900 border-2 border-gray-700 p-6">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                            Frameworks
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Laravel]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Spring Boot]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[React]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Next.js]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Node.js]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Flask]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[RESTful APIs]</span>
                        </div>
                    </div>

                    <!-- Cloud & DevOps -->
                    <div class="bg-neutral-900 border-2 border-gray-700 p-6">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                            </svg>
                            Cloud &amp; DevOps
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[AWS EC2]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[AWS S3]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Docker]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Git]</span>
                        </div>
                    </div>

                    <!-- Data & AI -->
                    <div class="bg-neutral-900 border-2 border-gray-700 p-6">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                            </svg>
                            Data &amp; AI
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Power BI]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Pandas]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[NumPy]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[ML Basics]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[AI Agents]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Agentic Workflows]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Prompt Engineering]</span>
                        </div>
                    </div>

                    <!-- Tools & Other -->
                    <div class="bg-neutral-900 border-2 border-gray-700 p-6 md:col-span-2">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                            Tools &amp; Practices
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Jira]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Postman]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[GitLab CI/CD]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[VS Code]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Agile/Scrum]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Unit Testing]</span>
                            <span class="px-2 py-0.5 border border-gray-700 text-red-400 text-sm">[Version Control]</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional Experience Section -->
            <div class="mb-20">
                <h2 class="font-display text-3xl tracking-wide text-gray-100 mb-8">&gt; Professional Experience</h2>

                <div class="space-y-8">
                    <!-- Experience 1 -->
                    <div class="bg-neutral-900 border-2 border-red-800 overflow-hidden">
                        <div class="bg-black border-b-2 border-red-800 px-6 py-4">
                            <h3 class="text-xl font-bold text-gray-100">Operations Optimisation Analyst</h3>
                            <p class="text-red-400 font-medium">TPG Telecom, Australia</p>
                            <p class="text-gray-500 text-sm mt-1">May 2026 - Present</p>
                        </div>
                        <div class="px-6 py-5">
                            <p class="text-gray-300 mb-4">Supporting Customer Operations performance reporting and analysis across TPG Telecom brands.</p>
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Analyse large telecommunications datasets and speech analytics to identify operational trends and improvement opportunities.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Build and maintain Power BI dashboards and automated reporting for daily, weekly, monthly, and quarterly stakeholder updates.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Use SQL and Python to extract, transform, and analyse data from multiple sources.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Design PowerPoint presentations and data visualisations for operational, management, and executive audiences.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Collaborate with Customer Operations leadership, Workforce Planning, Quality, and Business Intelligence teams.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Maintain KPI definitions and simplify reporting processes across brands.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 2 -->
                    <div class="bg-neutral-900 border-2 border-red-800 overflow-hidden">
                        <div class="bg-black border-b-2 border-red-800 px-6 py-4">
                            <h3 class="text-xl font-bold text-gray-100">Customer Solutions Advisor</h3>
                            <p class="text-red-400 font-medium">TPG Telecom, Australia</p>
                            <p class="text-gray-500 text-sm mt-1">Aug 2024 - May 2026</p>
                        </div>
                        <div class="px-6 py-5">
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Act as the first point of contact for customers, resolving product, billing, device, and connectivity issues with a customer-first mindset.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Provide troubleshooting support across mobile, broadband, and account services while guiding customers in using self-service digital tools.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Use product knowledge and technical understanding to deliver clear explanations of issues and solutions, improving customer confidence and satisfaction.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Adapt quickly to new technologies, processes, and product updates within a fast-paced retail and technical support environment.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Build strong rapport with customers, delivering service that balances problem-solving with commercial awareness.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 3 -->
                    <div class="bg-neutral-900 border-2 border-red-800 overflow-hidden">
                        <div class="bg-black border-b-2 border-red-800 px-6 py-4">
                            <h3 class="text-xl font-bold text-gray-100">Software Developer / Technical Consultant</h3>
                            <p class="text-red-400 font-medium">Industrial Metal Components, Jodhpur, India</p>
                            <p class="text-gray-500 text-sm mt-1">Mar 2020 - Jun 2022</p>
                        </div>
                        <div class="px-6 py-5">
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Modernised internal business systems by migrating legacy PHP applications into Laravel MVC, improving system reliability, maintainability, and reducing future development overhead.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Collaborated with operations, management, and production teams to understand workflow requirements and translate them into functional, data-driven software features.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Wrote and tuned SQL queries, cleaned and validated data, and improved the accuracy of internal reports used for inventory, production planning, and operational decisions.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Troubleshot full-stack issues across APIs, authentication flows, database queries, and cloud-hosted environments, increasing system stability and reducing recurring errors.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Built reusable components, automated manual workflows, and implemented analytical insights that improved process efficiency across departments.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Supported the organisation's cloud migration and remote-access setup during COVID-19, ensuring smooth adoption and uninterrupted operations.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Participated in Agile development cycles, documented technical workflows, and contributed to both feature development and system maintenance.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Experience 4 -->
                    <div class="bg-neutral-900 border-2 border-red-800 overflow-hidden">
                        <div class="bg-black border-b-2 border-red-800 px-6 py-4">
                            <h3 class="text-xl font-bold text-gray-100">Web Application Developer</h3>
                            <p class="text-red-400 font-medium">Sarga Technologies, Jodhpur, India</p>
                            <p class="text-gray-500 text-sm mt-1">Jul 2016 - May 2018</p>
                        </div>
                        <div class="px-6 py-5">
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Built and maintained client-facing web applications using Laravel, PHP, JavaScript, and SQL.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Redesigned legacy websites, improving scalability, responsiveness, and security.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Developed reusable components and plugins to accelerate future project delivery.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Collaborated with clients to understand business needs and build technical solutions that fit them.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- University & Leadership Experience Section -->
            <div class="mb-12">
                <h2 class="font-display text-3xl tracking-wide text-gray-100 mb-8">&gt; University &amp; Leadership Experience</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Leadership 1 -->
                    <div class="bg-neutral-900 border-2 border-gray-700 overflow-hidden">
                        <div class="bg-black border-b-2 border-gray-700 px-6 py-4">
                            <h3 class="text-lg font-bold text-gray-100">Secretary &amp; Vice Secretary</h3>
                            <p class="text-gray-400 font-medium text-sm">Griffith University Nakama Japan Society</p>
                            <p class="text-gray-600 text-xs mt-1">250+ Members • Jun 2023 - Jul 2024</p>
                        </div>
                        <div class="px-6 py-4">
                            <ul class="space-y-2 text-gray-300 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Coordinated events, managed communications, and strengthened community engagement.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Supported executive decisions, budgeting, and team coordination.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Leadership 2 -->
                    <div class="bg-neutral-900 border-2 border-gray-700 overflow-hidden">
                        <div class="bg-black border-b-2 border-gray-700 px-6 py-4">
                            <h3 class="text-lg font-bold text-gray-100">Partnerships &amp; Sponsorship Officer</h3>
                            <p class="text-gray-400 font-medium text-sm">Griffith Technology Association</p>
                            <p class="text-gray-600 text-xs mt-1">200+ Members • Jul 2023 - Jul 2024</p>
                        </div>
                        <div class="px-6 py-4">
                            <ul class="space-y-2 text-gray-300 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Formed partnerships with industry organisations to support student opportunities.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Led sponsorship outreach, event planning, and strategic collaborations.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
