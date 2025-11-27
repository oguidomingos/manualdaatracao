import { Button } from "@/components/ui/button";
import { ArrowRight, Lock } from "lucide-react";

export function Price() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="price">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="font-headline text-4xl md:text-5xl font-black uppercase tracking-wide">
            Quanto custa para mudar sua <span className="text-primary">vida com mulheres?</span>
          </h2>
          <div className="mt-12 max-w-2xl mx-auto bg-gradient-to-br from-accent/10 via-yellow-500/10 to-orange-400/10 border-2 border-accent/50 rounded-2xl p-8 shadow-2xl shadow-black/50 ring-1 ring-inset ring-accent/20">
            <p className="font-bold text-lg text-accent">OFERTA ESPECIAL DO DIA</p>
            <div className="my-4">
              <p className="text-2xl text-foreground/50 line-through">De R$ 882,00 por</p>
              <p className="font-headline text-6xl md:text-8xl font-black text-transparent bg-clip-text bg-gradient-to-br from-amber-300 to-orange-500 drop-shadow-md">
                Apenas R$ 37,50
              </p>
              <p className="font-bold text-xl mt-2 text-foreground">(Pagamento Único)</p>
            </div>
            <p className="text-lg text-accent/80">Economia total de <span className="font-bold">R$ 844,50</span> hoje.</p>
            
            <div className="flex flex-col items-center gap-4 mt-8">
              <Button size="lg" className="w-full max-w-md font-bold text-xl px-12 h-20 rounded-lg bg-gradient-to-br from-primary via-rose-500 to-red-600 text-white shadow-[0_4px_25px_rgba(200,30,80,0.4)] hover:shadow-[0_6px_30px_rgba(200,30,80,0.5)] transition-all duration-300 transform hover:scale-105">
                QUERO ACESSO POR R$ 37,50
                <ArrowRight className="ml-2 w-6 h-6" />
              </Button>
              <div className="flex items-center gap-2 text-sm text-muted-foreground mt-2">
                <Lock className="w-4 h-4" />
                <span>Compra 100% segura. Acesso instantâneo.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
