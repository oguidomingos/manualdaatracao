import { Card, CardContent } from "@/components/ui/card";
import Image from "next/image";
import { PlaceHolderImages } from "@/lib/placeholder-images";

const proofs = [
  { id: "proof-1", alt: "Print de conversa de aluno", hint: "chat message" },
  { id: "proof-2", alt: "Print de conversa de aluno", hint: "chat message happy" },
  { id: "proof-3", alt: "Print de conversa de aluno", hint: "chat message success" },
  { id: "proof-4", alt: "Print de conversa de aluno", hint: "chat message date" },
];

export function SocialProof() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="proof">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Homens reais. <span className="text-primary">Resultados reais.</span>
        </h2>
        <p className="text-center max-w-2xl mx-auto mt-4 text-lg text-muted-foreground">
          Veja o que os alunos estão dizendo e conquistando após aplicarem o método.
        </p>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mt-16">
          {proofs.map((proof) => {
            const placeholder = PlaceHolderImages.find(p => p.id === proof.id);
            return (
              <Card key={proof.id} className="bg-card border-2 border-copper-light/20 rounded-lg overflow-hidden group shadow-md shadow-black/30 hover:border-copper-light/50 transition-all duration-300">
                <CardContent className="p-0">
                  <div className="aspect-[9/16] bg-muted overflow-hidden">
                    <Image
                      src={placeholder?.imageUrl || `https://picsum.photos/seed/${proof.id}/360/640`}
                      alt={placeholder?.description || proof.alt}
                      width={360}
                      height={640}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                      data-ai-hint={proof.hint}
                    />
                  </div>
                </CardContent>
              </Card>
            );
          })}
        </div>
      </div>
    </section>
  );
}
