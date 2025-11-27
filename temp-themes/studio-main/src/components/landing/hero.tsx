import { Button } from "@/components/ui/button";
import Image from 'next/image';
import { PlaceHolderImages } from "@/lib/placeholder-images";
import { ArrowRight, Lock, PlayCircle } from "lucide-react";

export function Hero() {
  const vslPlaceholder = PlaceHolderImages.find(p => p.id === 'vsl-placeholder');

  return (
    <section className="relative w-full min-h-screen flex items-center justify-center text-white overflow-hidden px-4 py-24 sm:py-32">
      <div className="absolute inset-0 z-0">
        <Image 
          src="https://images.unsplash.com/photo-1519680373-9024b385f818?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3NDE5ODJ8MHwxfHNlYXJjaHw0fHxyZWQlMjBhbmQlMjBibGFjayUyMHNpbGslMjBzaGVldHN8ZW58MHx8fHwxNzYzMTk2OTgyfDA&ixlib=rb-4.1.0&q=80&w=1080"
          alt="Sensual background with red and black silk sheets"
          fill
          className="w-full h-full object-cover"
          data-ai-hint="red black silk sheets"
          priority
        />
        <div className="absolute inset-0 bg-gradient-to-r from-primary/30 via-background to-background opacity-90"></div>
      </div>
      
      <div 
        className="absolute inset-0 z-10 opacity-30"
        style={{
          backgroundImage: `radial-gradient(circle at center, hsl(var(--primary) / 0.1), transparent 40%), radial-gradient(circle at 20% 80%, hsl(var(--accent) / 0.05), transparent 30%), radial-gradient(circle at 80% 30%, hsl(var(--primary) / 0.08), transparent 25%)`,
          backgroundSize: '100% 100%',
          animation: 'pulse-bg 20s infinite ease-in-out',
        }}
      ></div>

      <div className="relative z-20 container mx-auto flex flex-col items-center text-center">
        <div className="bg-background/50 backdrop-blur-xl border border-primary/20 p-6 md:p-10 rounded-2xl shadow-2xl shadow-black/50 max-w-2xl ring-1 ring-inset ring-primary/20">
          
          <h1 className="font-headline text-4xl md:text-6xl font-black uppercase tracking-wider drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)]">
           Seja honesto: ninguém nunca te ensinou a transar.
          </h1>
          
          <div className="mt-6 text-lg md:text-2xl text-primary font-bold max-w-2xl mx-auto">
            <p>E agora isso está ferrando sua confiança.</p>
          </div>
          
          <p className="mt-4 text-base md:text-lg text-foreground/80 max-w-xl mx-auto">
            Por apenas R$ 29,90, você vai aprender com performers profissionais, coaches da indústria adulta e especialistas em conexão como realmente conduzir, satisfazer e marcar uma mulher de um jeito que ela não só sente, mas lembra.
          </p>

          <div className="my-8 md:my-10">
            <div className="aspect-[9/16] w-full max-w-[280px] mx-auto bg-black rounded-lg border-2 border-primary/50 shadow-[0_0_40px_rgba(197,24,74,0.2)] overflow-hidden relative group">
                <Image 
                  src={vslPlaceholder?.imageUrl || "https://picsum.photos/seed/vsl/720/1280"}
                  alt={vslPlaceholder?.description || "A confident man with an elegant woman"}
                  fill
                  className="w-full h-full object-cover opacity-10"
                  data-ai-hint={vslPlaceholder?.imageHint || "man woman couple"}
                  priority
                />
              <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-center justify-center">
                <PlayCircle className="w-20 h-20 text-primary/80 group-hover:text-primary group-hover:scale-110 transition-all duration-300" strokeWidth={1} />
              </div>
            </div>
          </div>

          <div className="flex flex-col items-center gap-4">
            <Button size="lg" className="w-full max-w-md font-bold text-xl px-12 h-20 rounded-lg bg-gradient-to-br from-primary via-rose-500 to-red-600 text-white shadow-[0_4px_25px_rgba(200,30,80,0.4)] hover:shadow-[0_6px_30px_rgba(200,30,80,0.5)] transition-all duration-300 transform hover:scale-105 animate-pulse">
              QUERO MUDAR ISSO AGORA
              <ArrowRight className="ml-2 w-6 h-6" />
            </Button>
            <div className="flex items-center gap-2 text-sm text-muted-foreground mt-2">
              <Lock className="w-4 h-4" />
              <span>Compra 100% segura. Acesso instantâneo.</span>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
