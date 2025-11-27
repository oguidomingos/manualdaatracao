import { Hero } from '@/components/landing/hero';
import { Storytelling } from '@/components/landing/storytelling';
import { Method } from '@/components/landing/method';
import { HowItWorks } from '@/components/landing/how-it-works';
import { Benefits } from '@/components/landing/benefits';
import { Differentiators } from '@/components/landing/differentiators';
import { Bonuses } from '@/components/landing/bonuses';
import { Price } from '@/components/landing/price';
import { ValueStack } from '@/components/landing/value-stack';
import { WhatYouGet } from '@/components/landing/what-you-get';
import { InsidePreview } from '@/components/landing/inside-preview';
import { DorVsTransformacao } from '@/components/landing/dor-vs-transformacao';
import { ForWhom } from '@/components/landing/for-whom';
import { Comparison } from '@/components/landing/comparison';
import { SocialProof } from '@/components/landing/social-proof';
import { Testimonials } from '@/components/landing/testimonials';
import { Urgency } from '@/components/landing/urgency';
import { Guarantee30 } from '@/components/landing/guarantee-30';
import { Faq } from '@/components/landing/faq';
import { Footer } from '@/components/landing/footer';
import { CtaFinal } from '@/components/landing/cta-final';

export default function Home() {
  return (
    <div className="bg-background overflow-x-hidden">
      <Hero />
      <Storytelling />
      <Method />
      <HowItWorks />
      <InsidePreview />
      <WhatYouGet />
      <Benefits />
      <Bonuses />
      <Differentiators />
      <SocialProof />
      <Testimonials />
      <DorVsTransformacao />
      <ForWhom />
      <Comparison />
      <ValueStack />
      <Price />
      <Urgency />
      <Guarantee30 />
      <CtaFinal />
      <Faq />
      <Footer />
    </div>
  );
}
