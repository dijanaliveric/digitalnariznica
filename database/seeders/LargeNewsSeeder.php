<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Image;

class LargeNewsSeeder extends Seeder
{
    public function run()
    {
        // Očistimo postojeće zapise
        Image::truncate();
        News::truncate();

        $articles = [
            [
                'title'        => 'In-Depth Analysis of the 2025 SME Support Framework in the European Union',
                'published_at' => now()->subDays(2),
                'content'      => '
                    <p>The European Commission has unveiled its most ambitious plan yet to support small and medium-sized enterprises (SMEs) across all 27 member states. This multi-billion-euro package is designed to accelerate digital transformation, foster sustainability, and strengthen cross-border cooperation among micro, small and medium enterprises.</p>
                    <p>At the heart of this initiative is the Digital Acceleration Fund, providing grants of up to €100,000 per company to adopt advanced software platforms and cloud-based infrastructures. The goal is to reduce the technological divide between established industry leaders and agile startups by incentivizing early adoption of AI-driven analytics and automated workflow tools.</p>
                    <p>Alongside digital tools, the Sustainability Incentive Programme allocates 50% co-financing for green projects, including renewable energy installations, waste-reduction machinery, and eco-certification processes. Companies demonstrating a clear roadmap to carbon neutrality can access fast-track support, minimizing bureaucratic hurdles and ensuring swift disbursement of funds.</p>
                    <p>Financial advisors are also in line to benefit: a dedicated Advisory Co-funding Scheme reimburses up to 70% of costs for consultancy on regulatory compliance, intellectual property protection, and market entry strategies. This measure aims to equip SMEs with the expertise normally reserved for large corporates, leveling the playing field on a continental scale.</p>
                    <p>The Cross-Border Market Expansion window offers lump-sum grants for participation in trade fairs, B2B matchmaking events, and e-commerce integration services. SMEs targeting new markets outside their home country can receive up to €30,000 to cover stand costs, translation services, and customs advice.</p>
                    <p>To streamline application processes, the Commission has launched a unified portal aggregating all calls and compliance checks. This “one-stop shop” uses secure electronic signatures and pre-validated company profiles to cut processing times by up to 40% compared to previous cycles.</p>
                    <p>Early results from the pilot phase indicate a 25% uptick in cross-border transactions among participating SMEs, while over 5,000 companies have already received initial disbursements totaling €450 million. Stakeholders remain optimistic that this “EU SME Act” will catalyze a new wave of innovation and resilience in the post-pandemic economy.</p>
                    <p>Looking ahead, the Commission plans to extend these measures beyond 2027, with a mid-term review scheduled for 2026 to assess impact and recalibrate funding priorities based on emerging challenges such as cybersecurity threats and AI ethics considerations.</p>
                    <img src="/storage/news/sme-support-1.jpg" alt="Digital Acceleration Workshop">
                    <img src="/storage/news/sme-support-2.jpg" alt="EU Sustainability Forum">
                ',
                'images' => [
                    ['path'=>'news/sme-support-1.jpg','caption'=>'Digital Acceleration Workshop'],
                    ['path'=>'news/sme-support-2.jpg','caption'=>'EU Sustainability Forum'],
                    ['path'=>'news/sme-support-3.jpg','caption'=>'Cross-Border Trade Fair'],
                ],
            ],

            [
                'title'        => 'Revolutionizing Bookkeeping: Automation Tools for Modern Enterprises',
                'published_at' => now()->subDays(5),
                'content'      => '
                    <p>In a landscape where data volumes are exploding, traditional bookkeeping methods are being rapidly outpaced by automated solutions. Leading platforms now leverage OCR (Optical Character Recognition) and machine learning to parse invoices, receipts and bank statements in seconds, dramatically reducing manual entry errors.</p>
                    <p>One standout innovation is SmartLedger, which automatically categorizes transactions based on pretrained accounting models, learns from user corrections, and adapts to bespoke chart of accounts in real time. Early adopters report up to 80% time savings on routine reconciliation tasks.</p>
                    <p>Another game-changer is PayFlow AI, designed to manage payroll calculations, tax deductions, and benefits administration through a conversational chatbot interface. Employers can simply message “Generate July payslips” and receive fully compliant payroll runs within minutes.</p>
                    <p>This shift toward automation is underpinned by robust API ecosystems, allowing bookkeeping software to integrate seamlessly with ERP systems, e-commerce platforms, and banking APIs. Clients gain real-time financial dashboards, cash-flow forecasts, and scenario analysis at the push of a button.</p>
                    <p>Security remains a top priority: end-to-end encryption, multi-factor authentication and continuous compliance monitoring ensure that automated solutions meet the highest regulatory standards, including GDPR and ISO 27001.</p>
                    <p>Case studies from mid-sized firms reveal a 30% reduction in accounting staff workload within the first quarter of implementation, enabling teams to reallocate resources toward strategic financial planning and advisory services rather than data entry.</p>
                    <p>Looking forward, the integration of blockchain-based audit trails promises immutable record-keeping, providing auditors and tax authorities with transparent, tamper-proof ledgers that can be queried on demand.</p>
                    <img src="/storage/news/bookkeeping-automation-1.jpg" alt="SmartLedger Dashboard">
                    <img src="/storage/news/bookkeeping-automation-2.jpg" alt="AI Payroll Chatbot">
                ',
                'images' => [
                    ['path'=>'news/bookkeeping-automation-1.jpg','caption'=>'SmartLedger Dashboard'],
                    ['path'=>'news/bookkeeping-automation-2.jpg','caption'=>'AI Payroll Chatbot'],
                ],
            ],

            [
                'title'        => 'The Rise of Blockchain and FinTech in Accounting Practices',
                'published_at' => now()->subDays(10),
                'content'      => '
                    <p>Blockchain technology has moved beyond cryptocurrencies and is now reshaping how financial records are maintained. By distributing an immutable ledger across a network of nodes, organizations achieve unprecedented data integrity and auditability.</p>
                    <p>One prominent application is the Smart Contract Registry, where payment terms are encoded directly into the blockchain. Once contractual conditions are met—such as delivery confirmation—the system autonomously releases funds without intermediary intervention.</p>
                    <p>FinTech startups are embedding these smart contracts into invoicing workflows, enabling “code-as-law” models that reduce disputes and accelerate settlements. Early pilots have demonstrated up to a 50% decrease in invoice processing times.</p>
                    <p>On the regulatory front, authorities in the EU and UK are exploring Digital Ledger Reporting mandates, which would require large enterprises to submit quarterly financial statements via blockchain-anchored systems, ensuring instantaneous compliance verification.</p>
                    <p>However, integration challenges remain: firms must navigate interoperability standards, gas fees on public blockchains and the environmental footprint of certain consensus mechanisms. Hybrid permissioned networks are emerging as a viable compromise, balancing performance with decentralization.</p>
                    <p>Looking ahead, the convergence of blockchain with AI-driven analytics promises “predictive auditing,” where anomalies and potential fraud are flagged before they occur, based on pattern recognition across decentralized data pools.</p>
                    <img src="/storage/news/blockchain-fintech-1.jpg" alt="Blockchain Ledger Visualization">
                    <img src="/storage/news/blockchain-fintech-2.jpg" alt="Smart Contract Workflow">
                ',
                'images' => [
                    ['path'=>'news/blockchain-fintech-1.jpg','caption'=>'Blockchain Ledger Visualization'],
                    ['path'=>'news/blockchain-fintech-2.jpg','caption'=>'Smart Contract Workflow'],
                ],
            ],

            [
                'title'        => 'Navigating the New Tax Legislation: Impacts and Strategies for Entrepreneurs',
                'published_at' => now()->subDays(15),
                'content'      => '
                    <p>The recently approved Tax Reform Act introduces sweeping changes that will affect businesses of all sizes. Highlights include an increase in the basic allowance, revised depreciation schedules and new reporting requirements for digital services.</p>
                    <p>One significant modification is the extension of accelerated capital allowances, allowing companies to write off up to 50% of qualifying investments in machinery and equipment in the year of purchase, boosting short-term cash flow.</p>
                    <p>Entrepreneurs offering digital subscriptions will need to adapt to new VAT collection rules, which now require real-time remittance for cross-border services, rather than quarterly filings. Businesses must update invoicing systems accordingly to avoid penalties.</p>
                    <p>Small businesses with annual turnover below €150,000 will benefit from a simplified compliance regime, leveraging pre-filled tax returns and automated filing via the national e-portal. This aims to reduce administrative burden and improve voluntary compliance rates.</p>
                    <p>However, mid-sized enterprises face challenges: the new rules on transfer pricing documentation and anti-avoidance measures demand enhanced record-keeping and may increase compliance costs by up to 20%.</p>
                    <p>Tax advisors are now recommending a phased implementation plan: conduct a compliance audit, upgrade accounting software, and schedule staff training on the updated rules before the end of Q3 to ensure a smooth transition.</p>
                    <img src="/storage/news/tax-legislation-1.jpg" alt="Tax Legislation Debate">
                    <img src="/storage/news/tax-legislation-2.jpg" alt="Digital Tax Filing">
                ',
                'images' => [
                    ['path'=>'news/tax-legislation-1.jpg','caption'=>'Tax Legislation Debate'],
                    ['path'=>'news/tax-legislation-2.jpg','caption'=>'Digital Tax Filing'],
                ],
            ],
        ];

        foreach ($articles as $a) {
            $news = News::create([
                'title'        => $a['title'],
                'content'      => $a['content'],
                'published_at' => $a['published_at'],
            ]);

            foreach ($a['images'] as $idx => $img) {
                $news->images()->create([
                    'path'    => $img['path'],
                    'caption' => $img['caption'],
                    'order'   => $idx,
                ]);
            }
        }
    }
}
