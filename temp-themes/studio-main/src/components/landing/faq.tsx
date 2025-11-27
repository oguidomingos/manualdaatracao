import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from "@/components/ui/accordion";

const faqItems = [
  {
    question: "Isso funciona para qualquer homem, de qualquer idade?",
    answer: "Sim. O método é baseado em princípios universais da psicologia e atração humana. Ele funciona para homens de 18 a 60+ anos, independentemente da sua aparência ou situação financeira atual."
  },
  {
    question: "Preciso ser rico ou bonito para ter resultados?",
    answer: "Absolutamente não. O programa foca em construir valor real e demonstrá-lo através de comportamento e comunicação, que são muito mais poderosos do que dinheiro ou aparência física."
  },
  {
    question: "Em quanto tempo vejo os primeiros resultados?",
    answer: "Muitos alunos relatam um aumento de confiança e novas interações na primeira semana. Resultados significativos, como encontros consistentes, geralmente ocorrem dentro do primeiro mês de aplicação séria do método."
  },
  {
    question: "O acesso é vitalício?",
    answer: "Sim! Ao se inscrever, você garante acesso vitalício a todo o conteúdo atual e a todas as futuras atualizações do programa, sem nenhum custo adicional."
  }
];

export function Faq() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="faq">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Perguntas <span className="text-primary">frequentes</span>
        </h2>
        <div className="max-w-3xl mx-auto mt-12">
          <Accordion type="single" collapsible className="w-full space-y-4">
            {faqItems.map((item, index) => (
              <AccordionItem key={index} value={`item-${index}`} className="bg-primary/10 border-primary/20 border rounded-lg overflow-hidden transition-colors hover:border-primary/50">
                <AccordionTrigger className="p-6 text-lg font-bold hover:no-underline text-left text-foreground/90">
                  {item.question}
                </AccordionTrigger>
                <AccordionContent className="px-6 pb-6 text-muted-foreground text-base">
                  {item.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>
        </div>
      </div>
    </section>
  );
}
