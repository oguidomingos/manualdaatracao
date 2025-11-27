import { Card, CardContent } from "@/components/ui/card";
import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar";
import { PlaceHolderImages } from "@/lib/placeholder-images";

const testimonials = [
  {
    id: "testimonial-1",
    name: "Ricardo M.",
    quote: "Nunca vi minha parceira tão entregue. A confiança que ganhei é surreal, não só com mulheres, mas em tudo.",
    hint: "man portrait"
  },
  {
    id: "testimonial-2",
    name: "Lucas P.",
    quote: "Eu era perdido. Hoje sei exatamente o que fazer. Minha confiança mudou da água para o vinho e os resultados são visíveis.",
    hint: "man portrait happy"
  },
  {
    id: "testimonial-3",
    name: "Fernando S.",
    quote: "Depois deste treinamento, parece que virei outro cara. É uma transformação completa de dentro para fora. Recomendo demais.",
    hint: "man portrait smiling"
  },
];

const QuoteIcon = () => (
  <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg" className="absolute -top-3 -left-4 text-accent/20">
    <path d="M14.4171 29.7429C11.5429 29.7429 8.91429 28.7143 6.53143 26.6571C4.14857 24.6 2.95714 21.9714 2.95714 18.7714C2.95714 15.2 3.8 11.9429 5.48571 9C7.17143 6.05714 9.6 3.68571 12.7714 1.88571L15.6457 5.45714C13.2629 6.77143 11.4514 8.4 10.2114 10.3429C8.97143 12.2857 8.35143 14.4 8.35143 16.6857H14.4171V29.7429ZM36.7 29.7429C33.8257 29.7429 31.2 28.7143 28.8171 26.6571C26.4343 24.6 25.2429 21.9714 25.2429 18.7714C25.2429 15.2 26.0857 11.9429 27.7714 9C29.4571 6.05714 31.8857 3.68571 35.0571 1.88571L37.9314 5.45714C35.5486 6.77143 33.7371 8.4 32.4971 10.3429C31.2571 12.2857 30.6371 14.4 30.6371 16.6857H36.7V29.7429Z" fill="currentColor"/>
  </svg>
);

export function Testimonials() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary" id="testimonials">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          O que <span className="text-accent">eles dizem</span>
        </h2>
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
          {testimonials.map((t) => {
            const placeholder = PlaceHolderImages.find(p => p.id === t.id);
            return (
              <Card key={t.id} className="bg-card border-accent/20 rounded-xl flex flex-col justify-between">
                <CardContent className="pt-8 relative">
                  <QuoteIcon />
                  <p className="text-lg italic text-foreground/90 z-10 relative">"{t.quote}"</p>
                </CardContent>
                <div className="flex items-center gap-4 p-6 border-t border-accent/10 mt-4">
                  <Avatar className="w-14 h-14 border-2 border-accent">
                    <AvatarImage src={placeholder?.imageUrl} alt={`Foto de ${t.name}`} data-ai-hint={t.hint} />
                    <AvatarFallback>{t.name.charAt(0)}</AvatarFallback>
                  </Avatar>
                  <div>
                    <p className="font-bold text-lg">{t.name}</p>
                  </div>
                </div>
              </Card>
            );
          })}
        </div>
      </div>
    </section>
  );
}
