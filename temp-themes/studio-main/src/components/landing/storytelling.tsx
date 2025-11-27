"use client";

import { useState } from "react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { ArrowRight, ChevronDown, ChevronUp } from "lucide-react";
import Image from "next/image";
import { PlaceHolderImages } from "@/lib/placeholder-images";

export function Storytelling() {
  const storyImage = PlaceHolderImages.find(p => p.id === 'storytelling-image');
  const storytellerImage = PlaceHolderImages.find(p => p.id === 'storyteller');
  const [isExpanded, setIsExpanded] = useState(false);

  return (
    <section className="relative w-full py-20 md:py-32 bg-secondary overflow-hidden" id="story">
        <div className="absolute inset-0 z-0 opacity-20">
             <Image 
                src={storyImage?.imageUrl || 'https://picsum.photos/seed/story/1200/800'} 
                alt={storyImage?.description || 'Cinematic shot of a man looking thoughtfully'}
                fill
                className="w-full h-full object-cover"
                data-ai-hint={storyImage?.imageHint || 'man cinematic'}
              />
              <div className="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/80 to-transparent"></div>
        </div>

      <div className="container mx-auto px-4 relative z-10">
        <div className="grid md:grid-cols-5 gap-12 lg:gap-16 items-center">
          <div className="md:col-span-3">
            <Card className="bg-background/70 backdrop-blur-xl border-2 border-accent/30 p-6 md:p-8 rounded-2xl shadow-2xl shadow-black/50 ring-1 ring-inset ring-accent/20">
              <CardContent className="p-0 text-foreground/90 space-y-5">
                <p className="text-lg md:text-xl leading-relaxed">
                  “Eu vou falar com você como mulher, e sem passar a mão na sua cabeça.”
                </p>
                <p className="text-lg leading-relaxed text-muted-foreground">
                  A maioria dos homens que chega até mim tem o mesmo problema: vocês acham que sabem, mas não sabem. E a gente percebe na hora.
                </p>
                
                <div className={`space-y-5 transition-all duration-700 ease-in-out ${isExpanded ? 'max-h-[2000px] opacity-100' : 'max-h-0 opacity-0 overflow-hidden'}`}>
                   <p className="text-lg leading-relaxed text-muted-foreground">
                    Sabe aquela confiança que você tenta fingir? A gente vê que é fachada. Sabe quando você tenta conduzir, mas hesita? A gente sente. Sabe quando você tenta parecer no controle? É óbvio quando não está.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    E não, a gente não fala nada. Porque falar a verdade para um homem é quase sempre pedir para ele desabar. É ter que lidar com drama, ego ferido e silêncio desconfortável.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    Então a mulher que está com você faz o quê? Ela cala. Ela engole. Ela torce para você melhorar sozinho. E quando não melhora, ela se afasta. É assim. Cruel, mas real.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    Você acha que “não era para ser”, que ela é complicada, que ela perdeu o interesse. Mas eu, como mulher, vou te dizer a verdade sem suavizar:
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    Ela só não sentiu você. Você não marcou. Você não conectou. Você não conduziu.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    E quando um homem não sabe conduzir, por dentro ela pensa: “Ele não tem ideia do que está fazendo.” Mas, claro, ela nunca vai te dizer isso na sua cara. Porque ninguém fala isso para homem nenhum.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    E sabe por quê? Porque vocês foram jogados no mundo sem nenhuma instrução. Esperavam que você aprendesse sozinho. Com tentativa e erro. Com vergonha na cara. Com silêncio. Com insegurança escondida.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    Desculpa, mas isso não funciona. Nunca funcionou e nunca vai funcionar. A verdade é: vocês só fazem as coisas do jeito que aprenderam na marra, e quase sempre do jeito errado.
                  </p>
                   <p className="text-lg leading-relaxed text-muted-foreground">
                    E eu sei disso porque vi homens mudarem completamente depois que finalmente aprenderam o que ninguém nunca ensinou. Vi homens inseguros virarem caras confiantes de verdade. Vi homens perdidos aprenderem a ler o corpo de uma mulher. Vi homens medianos se tornarem memoráveis.
                  </p>
                  <p className="text-lg leading-relaxed text-muted-foreground">
                    E eu decidi criar este treinamento porque me cansei de ver mulheres frustradas e homens completamente sem rumo achando que o problema era “delas”.
                  </p>
                  <p className="font-bold text-lg md:text-xl text-accent">
                    E antes que você imagine bobagem, isso não é truquezinho, não é sedução barata, não é “palavrinha mágica”. É outra coisa. É simples, mas é poderosa:
                  </p>
                   <p className="text-lg leading-relaxed text-muted-foreground">
                    Você vai aprender o que nenhum homem aprende sozinho. O que nenhum pai ensina. O que nenhum amigo fala. O que nenhuma mulher te explica. E principalmente: você vai parar de passar vergonha, aquela que você nunca admite em voz alta, mas sente por dentro.
                  </p>
                   <p className="text-lg leading-relaxed text-muted-foreground">
                    Quando um homem sabe o que está fazendo, uma mulher sente. Quando não sabe, ela também sente. E é isso que você vai corrigir agora.
                  </p>
                </div>

                {!isExpanded && (
                  <Button 
                    variant="link" 
                    onClick={() => setIsExpanded(true)}
                    className="p-0 h-auto text-accent font-bold text-base hover:text-accent/80 transition-colors"
                  >
                    Continuar Lendo...
                    <ChevronDown className="w-5 h-5 ml-2" />
                  </Button>
                )}

                {isExpanded && (
                  <Button 
                    variant="link" 
                    onClick={() => setIsExpanded(false)}
                    className="p-0 h-auto text-accent font-bold text-base hover:text-accent/80 transition-colors"
                  >
                    Fechar Texto
                    <ChevronUp className="w-5 h-5 ml-2" />
                  </Button>
                )}
                
                <p className="font-bold text-lg md:text-xl text-accent/90 pt-4 border-t border-accent/10">
                  👉 Eu sou mulher. Eu sei o que funciona. E eu vou te ensinar. Direto. Cru. Real. Sem mentiras. Sem ego. Sem fantasia.
                </p>
              </CardContent>
            </Card>
          </div>
          <div className="md:col-span-2 flex flex-col justify-center items-center gap-8">
              <div className="relative w-full max-w-[300px] aspect-[4/5] rounded-xl overflow-hidden shadow-2xl shadow-black/50 border-2 border-accent/30 ring-1 ring-inset ring-accent/20">
                <Image
                  src={storytellerImage?.imageUrl || 'https://picsum.photos/seed/storyteller/400/500'}
                  alt={storytellerImage?.description || 'Woman in lingerie looking at the camera'}
                  fill
                  className="object-cover"
                  data-ai-hint={storytellerImage?.imageHint || 'woman lingerie'}
                />
              </div>
              <Button size="lg" variant="link" className="text-accent font-bold text-lg hover:text-white transition-colors duration-300">
                Quero minha virada agora
                <ArrowRight className="w-5 h-5 ml-2" />
              </Button>
          </div>
        </div>
      </div>
    </section>
  );
}
