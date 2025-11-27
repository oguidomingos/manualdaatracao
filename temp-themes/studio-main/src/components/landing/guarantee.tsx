import { ShieldCheck } from "lucide-react";

export function Guarantee() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary/10" id="guarantee">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto grid md:grid-cols-2 gap-10 items-center bg-card p-10 rounded-2xl border border-ring/20">
          <div className="text-center md:text-left">
            <h2 className="font-headline text-4xl font-black uppercase text-ring">
              Garantia Blindada
            </h2>
            <p className="mt-4 text-lg text-muted-foreground">
              Sua satisfação é nossa prioridade. Você tem 7 dias para testar todo o método sem riscos. Se por qualquer motivo você não estiver 100% satisfeito, basta um único email para receber seu investimento de volta. Simples assim.
            </p>
            <p className="mt-4 font-bold text-foreground">O risco é todo nosso.</p>
          </div>
          <div className="flex justify-center">
            <div className="relative w-48 h-48">
              <div className="absolute inset-0 rounded-full bg-gradient-to-br from-ring/50 to-accent/50 animate-pulse"></div>
              <div className="absolute inset-1.5 flex flex-col items-center justify-center text-center bg-card rounded-full">
                <ShieldCheck className="w-16 h-16 text-ring" />
                <span className="mt-2 font-bold text-xl text-ring">7 Dias</span>
                <span className="text-sm text-muted-foreground">de Garantia</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
