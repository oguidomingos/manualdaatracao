import Image from "next/image";

export function Guarantee30() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary/30" id="guarantee">
      <div className="container mx-auto px-4">
        <div className="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-12 bg-card p-10 rounded-2xl border-2 border-accent/30 shadow-2xl shadow-black/40">
          <div className="flex-shrink-0">
            <div className="relative w-48 h-48">
               <Image 
                  src="/gold-seal.png"
                  alt="Selo de Garantia 30 Dias"
                  width={200}
                  height={200}
                  className="animate-pulse"
                />
            </div>
          </div>
          <div className="text-center md:text-left">
            <h2 className="font-headline text-4xl font-black uppercase text-accent">
              Garantia Incondicional de 30 Dias
            </h2>
            <p className="mt-4 text-lg text-muted-foreground">
             Se o conteúdo não mudar sua vida, eu devolvo 100%. Sem perguntas. Sem medo. Sem frescura.
            </p>
            <p className="mt-4 font-bold text-foreground text-xl">Ou você tem o resultado que deseja, ou seu dinheiro de volta.</p>
          </div>
        </div>
      </div>
    </section>
  );
}
