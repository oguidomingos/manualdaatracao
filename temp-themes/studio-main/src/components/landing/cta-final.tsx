import { Button } from "@/components/ui/button";
import { ArrowRight, Lock } from "lucide-react";

export function CtaFinal() {
  return (
    <section className="w-full py-20 md:py-32 bg-primary">
      <div className="container mx-auto px-4">
        <div className="max-w-3xl mx-auto text-center">
          <h2 className="font-headline text-3xl md:text-4xl font-black uppercase tracking-wide text-primary-foreground">
            Você pode continuar acreditando que vai melhorar sozinho…
          </h2>
          <p className="mt-4 text-2xl text-accent font-bold">
            ou pode assumir o controle hoje e se tornar o homem que ela nunca esquece.
          </p>
          <div className="flex flex-col items-center gap-4 mt-12">
            <Button size="lg" className="w-full max-w-md font-bold text-xl px-12 h-20 rounded-lg bg-accent text-black shadow-[0_4px_25px_rgba(251,191,36,0.4)] hover:bg-accent/90 transition-all duration-300 transform hover:scale-105">
              GARANTIR ACESSO AGORA
              <ArrowRight className="ml-2 w-6 h-6" />
            </Button>
            <div className="flex items-center gap-2 text-sm text-primary-foreground/70 mt-2">
              <Lock className="w-4 h-4" />
              <span>Apenas 12 acessos hoje</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
